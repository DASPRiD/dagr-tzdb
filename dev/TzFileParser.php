<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev;

use DomainException;
use SplFileObject;

final class TzFileParser
{
    private const ZONE_FIELD_INDEXES = [
        'gmtOffset' => 2,
        'rule' => 3,
        'format' => 4,
        'untilYear' => 5,
        'untilMonth' => 6,
        'untilDay' => 7,
        'untilTime' => 8,
    ];
    private const CONTINUED_ZONE_FIELD_INDEXES = [
        'gmtOffset' => 0,
        'rule' => 1,
        'format' => 2,
        'untilYear' => 3,
        'untilMonth' => 4,
        'untilDay' => 5,
        'untilTime' => 6,
    ];
    private const MONTH_LENGHTS = [
	    [null, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
        [null, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
    ];
    private const MONTHS = [
        'jan' => 1,
        'feb' => 2,
        'mar' => 3,
        'apr' => 4,
        'may' => 5,
        'jun' => 6,
        'jul' => 7,
        'aug' => 8,
        'sep' => 9,
        'oct' => 10,
        'nov' => 11,
        'dec' => 12,
    ];
    private const LASTS = [
        'lastsun' => 0,
        'lastmon' => 1,
        'lastwed' => 2,
        'lastthu' => 3,
        'lastfri' => 4,
        'lastsat' => 4,
    ];
    private const WEEK_DAYS = [
        'sun' => 0,
        'mon' => 1,
        'wed' => 2,
        'thu' => 3,
        'fri' => 4,
        'sat' => 4,
    ];

    public function parseFile(SplFileObject $file) : array
    {
        $file->rewind();

        $links = [];
        $rules = [];
        $zones = [];
        $moreZoneData = false;
        $lastZones = null;

        while (!$file->eof()) {
            $fields = $this->getFields($file);

            if (null === $fields) {
                continue;
            }

            if ($moreZoneData) {
                $moreZoneData = $this->appendSubZone($lastZones, $fields, true);
                continue;
            }

            switch ($fields[0]) {
                case 'Rule':
                    $this->appendRule($rules, $fields);
                    $moreZoneData = false;
                    break;

                case 'Zone':
                    $moreZoneData = $this->appendZone($zones, $fields);
                    $lastZones = &$zones[$fields[1]];
                    break;

                case 'Link':
                    $this->appendLink($links, $fields);
                    $moreZoneData = false;
                    break;

                default:
                    throw new DomainException(sprintf('Invalid line value "%s"', $fields[0]));
            }
        }

        return [
            'links' => $links,
            'rules' => $rules,
            'zones' => $zones,
        ];
    }

    private function appendRule(array &$rules, array $fields) : void
    {
        if (10 !== count($fields)) {
            throw new DomainException('Invalid number of rule fields');
        }

        $name = $fields[1];

        if (!array_key_exists($name, $rules)) {
            $rules[$name] = [];
        }

        $rules[$name][] = [
            'standardOffset' => $this->parseTime($fields[8], true),
            'abbrVar' => $fields[9],
        ] + $this->ruleSub(
            $fields[2],
            $fields[3],
            $fields[4],
            $fields[5],
            $fields[6],
            $fields[7]
        );
    }

    private function ruleSub(
        string $lowYear,
        string $highYear,
        string $type,
        string $month,
        string $day,
        string $time
    ) : array {
        $ruleSub = [
            'timeDefinition' => 'wall',
        ];

        if ('' !== $time) {
            switch (strtolower(substr($time, -1))) {
                case 's':
                    $ruleSub['timeDefinition'] = 'standard';
                    break;

                case 'w':
                    $ruleSub['timeDefinition'] = 'wall';
                    break;

                case 'g':
                case 'u':
                case 'z':
                    $ruleSub['timeDefinition'] = 'utc';
                    break;
            }
        }

        $ruleSub['timeOfDay'] = $this->parseTime($time, false);

        // Month calculation
        $month = strtolower($month);

        if (!array_key_exists($month, self::MONTHS)) {
            throw new DomainException(sprintf('Invalid month name "%s"', $month));
        }

        $ruleSub['month'] = self::MONTHS[$month];

        // Year calculation
        $parsedYear = null;
        $lowYear = strtolower($lowYear);

        if (0 === strpos($lowYear, 'min')) {
            $ruleSub['lowYear'] = -999999999;
        } elseif (0 === strpos($lowYear, 'max')) {
            $ruleSub['lowYear'] = 999999999;
        } elseif (sscanf($lowYear, '%d', $parsedYear) < 1) {
            throw new DomainException(sprintf('Invalid starting year "%s"', $lowYear));
        } else {
            $ruleSub['lowYear'] = $parsedYear;
        }

        $highYear = strtolower($highYear);

        if (0 === strpos($highYear, 'min')) {
            $ruleSub['highYear'] = -999999999;
        } elseif (0 === strpos($highYear, 'max')) {
            $ruleSub['highYear'] = 999999999;
        } elseif (0 === strpos($highYear, 'only')) {
            $ruleSub['highYear'] = $ruleSub['lowYear'];
        } elseif (sscanf($highYear, '%d', $parsedYear) < 1) {
            throw new DomainException(sprintf('Invalid ending year "%s"', $highYear));
        } else {
            $ruleSub['highYear'] = $parsedYear;
        }

        if ($ruleSub['lowYear'] > $ruleSub['highYear']) {
            throw new DomainException('Starting year is greater than ending year');
        }

        if ('' === $type || '-' === $type) {
            $ruleSub['type'] = null;
        } elseif ($ruleSub['lowYear'] === $ruleSub['highYear']) {
            throw new DomainException('Typed single year');
        } else {
            $ruleSub['type'] = $type;
        }

        // Day calculation
        $day = strtolower($day);
        $lastIndex = substr(str_replace('-', '', $day), 0, 7);

        if (array_key_exists($lastIndex, self::LASTS)) {
            $ruleSub['dayCode'] = 'dowleq';
            $ruleSub['dayOfWeek'] = self::LASTS[$lastIndex];
            $ruleSub['dayOfMonth'] = self::MONTH_LENGHTS[1][$ruleSub['month']];
            return $ruleSub;
        }

        $currentPos = 0;
        $smallerPos = strpos($day, '<');
        $largerPos = strpos($day, '>');

        if (false !== $smallerPos) {
            $ruleSub['dayCode'] = 'dowleq';
            $currentPos = $smallerPos;
        } elseif (false !== $largerPos) {
            $ruleSub['dayCode'] = 'dowgeq';
            $currentPos = $largerPos;
        } else {
            $ruleSub['dayCode'] = 'dom';
        }

        if ('dom' !== $ruleSub['dayCode']) {
            if ('=' !== substr($day, ++$currentPos, 1)) {
                throw new DomainException('Invalid day of month');
            }

            ++$currentPos;
            $dayIndex = substr($day, 0, 3);

            if (!in_array($dayIndex, self::WEEK_DAYS)) {
                throw new DomainException('Invalid month');
            }

            $ruleSub['dayOfWeek'] = self::WEEK_DAYS[$dayIndex];
        } else {
            $ruleSub['dayOfWeek'] = -1;
        }

        $parsedDay = null;

        if (sscanf(substr($day, $currentPos), '%d', $parsedDay) < 1
            || $parsedDay <= 0
            || $parsedDay > self::MONTH_LENGHTS[1][$ruleSub['month']]
        ) {
            throw new DomainException('Invalid day of month');
        }

        $ruleSub['dayOfMonth'] = $parsedDay;

        return $ruleSub;
    }

    private function appendZone(array &$zones, array $fields) : bool
    {
        if (count($fields) < 5 || count($fields) > 9) {
            throw new DomainException('Invalid number of zone fields');
        }

        $name = $fields[1];

        if (array_key_exists($name, $zones)) {
            throw new DomainException(sprintf('Duplicate zone name "%s"', $name));
        }

        $zones[$name] = [];

        return $this->appendSubZone($zones[$name], $fields, false);
    }

    private function appendSubZone(array &$zones, array $fields, bool $isContinued) : bool
    {
        $indexes = $isContinued ? self::CONTINUED_ZONE_FIELD_INDEXES : self::ZONE_FIELD_INDEXES;
        $numFields = count($fields);

        if ($isContinued && ($numFields < 3 || $numFields > 7)) {
            throw new DomainException('Invalid number of continued zone fields');
        }

        try {
            $rule = $this->parseTime($fields[$indexes['rule']], true);
        } catch (DomainException $e) {
            $rule = $fields[$indexes['rule']];
        }

        $zone = [
            'gmtOffset' => $this->parseTime($fields[$indexes['gmtOffset']], true),
            'rule' => $rule,
            'format' => $fields[$indexes['format']],
        ];

        $zone['hasUntil'] = $numFields > $indexes['untilYear'];

        if ($zone['hasUntil']) {
            $zone += $this->ruleSub(
                $fields[$indexes['untilYear']],
                'only',
                '',
                $numFields > $indexes['untilMonth'] ? $fields[$indexes['untilMonth']] : 'Jan',
                $numFields > $indexes['untilDay'] ? $fields[$indexes['untilDay']] : '1',
                $numFields > $indexes['untilTime'] ? $fields[$indexes['untilTime']] : '0'
            );

            if ($isContinued && !empty($zones)) {
                $previousZone = end($zones);
                $previousTime = gmmktime(
                    0,
                    0,
                    0,
                    $previousZone['month'],
                    $previousZone['dayOfMonth'],
                    $previousZone['lowYear']
                ) + $previousZone['timeOfDay'];
                $time = gmmktime(
                    0,
                    0,
                    0,
                    $zone['month'],
                    $zone['dayOfMonth'],
                    $zone['lowYear']
                ) + $zone['timeOfDay'];

                if ($previousTime >= $time) {
                    throw new DomainException('Zone continuation line end time is after end time of previous line');
                }
            }
        }

        $zones[] = $zone;
        return $zone['hasUntil'];
    }

    private function appendLink(array &$links, array $fields) : void
    {
        if (3 !== count($fields)) {
            throw new DomainException('Invalid number of link fields');
        }

        $links[$fields[2]] = $fields[1];
    }

    private function parseTime(string $time, bool $signable) : int
    {
        if ('' === $time) {
            return 0;
        }

        if (!$signable) {
            $sign = 1;
        } elseif ('-' === $time[0]) {
            $sign = -1;
            $time = substr($time, 1);
        } else {
            $sign = 1;
        }

        $hours = 0;
        $minutes = 0;
        $seconds = 0;

        if (sscanf($time, '%d:%d:%d', $hours, $minutes, $seconds) < 3
            && sscanf($time, '%d:%d', $hours, $minutes) < 2
            && sscanf($time, '%d', $hours) < 1
        ) {
            throw new DomainException(sprintf('Invalid time string "%s"', $time));
        }

        if ($hours < 0 || $minutes < 0 || $seconds < 0) {
            throw new DomainException(sprintf('Invalid time string "%s"', $time));
        }

        return $sign * ($hours * 3600 + $minutes * 60 + $seconds);
    }

    private function getFields(SplFileObject $file) : ?array
    {
        $line = rtrim($file->fgets(), "\n") . "\0";
        $i = 0;
        $fields = [];

        while (true) {
            while (ctype_space($line[$i])) {
                ++$i;
            }

            if ("\0" === $line[$i] || '#' === $line[$i]) {
                break;
            }

            $value = '';

            do {
                $char = $line[$i++];

                if ('"' !== $char) {
                    $value .= $char;
                    continue;
                }

                for ($nextChar = $line[$i++]; '"' !== $nextChar && "\0" !== $nextChar; $nextChar = $line[$i++]) {
                    $value .= $nextChar;
                }

                if ('\0' === $nextChar) {
                    throw new DomainException('Odd number of quotation marks');
                }
            } while ("\0" !== $line[$i] && '#' !== $line[$i] && !ctype_space($line[$i]));

            $fields[] = $value;
        }

        return (empty($fields) ? null : $fields);
    }
}
