<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class TzRule
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $dayOfMonthIndicator;

    /**
     * @var int
     */
    private $dayOfWeek;

    /**
     * @var LocalTime
     */
    private $time;

    /**
     * @var bool
     */
    private $timeEndOfDay;

    /**
     * @var TimeDefinition
     */
    private $timeDefinition;

    /**
     * @var int
     */
    private $savingAmountSeconds;

    public function __construct(
        int $year,
        int $month,
        int $dayOfMonthIndicator,
        int $dayOfWeek,
        LocalTime $time,
        bool $timeEndOfDay,
        TimeDefinition $timeDefinition,
        int $savingAmountSeconds
    ) {
        $this->year = $year;
        $this->month = $month;
        $this->dayOfMonthIndicator = $dayOfMonthIndicator;
        $this->dayOfWeek = $dayOfWeek;
        $this->time = $time;
        $this->timeEndOfDay = $timeEndOfDay;
        $this->timeDefinition = $timeDefinition;
        $this->savingAmountSeconds = $savingAmountSeconds;
    }

    public function setYear(int $year) : void
    {
        $this->year = $year;
    }

    public function getYear() : int
    {
        return $this->year;
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function getDayOfMonthIndicator() : int
    {
        return $this->dayOfMonthIndicator;
    }

    public function getDayOfWeek() : int
    {
        return $this->dayOfWeek;
    }

    public function getTime() : LocalTime
    {
        return $this->time;
    }

    public function isTimeEndOfDay() : bool
    {
        return $this->timeEndOfDay;
    }

    public function getTimeDefinition() : TimeDefinition
    {
        return $this->timeDefinition;
    }

    public function toTransition(int $zoneOffset, int $savingSecondsBefore) : ZoneOffsetTransition
    {
        $localDateTime = new LocalDateTime($this->toLocalDate(), $this->time);
        $offsetBefore = $zoneOffset + $savingSecondsBefore;
        $localDateTime2 = $this->timeDefinition->createDateTime($localDateTime, $zoneOffset, $offsetBefore);
        $offsetAfter = $zoneOffset + $this->savingAmountSeconds;

        return new ZoneOffsetTransition($localDateTime2, $offsetBefore, $offsetAfter);
    }

    public function toEpochSecond(int $zoneOffset, int $seconds) : int
    {
        $localDateTime = new LocalDateTime($this->toLocalDate(), $this->time);
        $zoneOffset2 = $zoneOffset + $seconds;

        return $this->timeDefinition->createDateTime($localDateTime, $zoneOffset, $zoneOffset2)->toEpochSeconds(
            $zoneOffset2
        );
    }

    public function isTransition(int $savingSecondsBefore) : bool
    {
        return $this->savingAmountSeconds !== $savingSecondsBefore;
    }

    public function toTransitionRule(int $zoneOffset, int $savingSecondsBefore) : ZoneOffsetTransitionRule
    {
        if ($this->dayOfMonthIndicator < 0 && 2 !== $this->month) {
            $this->dayOfMonthIndicator = Utils::maxLengthOfMonth($this->month) - 6;
        }

        if ($this->timeEndOfDay && $this->dayOfMonthIndicator > 0 && !(
            28 === $this->dayOfMonthIndicator && 2 === $this->month
        )) {
            $localDate = (new LocalDate(2004, $this->month, $this->dayOfMonthIndicator))->plusDays(1);
            $this->month = $localDate->getMonth();
            $this->dayOfMonthIndicator = $localDate->getDayOfMonth();

            if (-1 !== $this->dayOfWeek) {
                $this->dayOfWeek = Utils::plusDayOfWeek($this->dayOfWeek, 1);
            }

            $this->timeEndOfDay = false;
        }

        return new ZoneOffsetTransitionRule(
            $this->month,
            $this->dayOfMonthIndicator,
            $this->dayOfWeek,
            $this->time,
            $this->timeEndOfDay,
            $this->timeDefinition,
            $zoneOffset,
            $zoneOffset + $savingSecondsBefore,
            $zoneOffset + $this->savingAmountSeconds
        );
    }

    public function getSavingAmountSeconds() : int
    {
        return $this->savingAmountSeconds;
    }

    private function toLocalDate() : LocalDate
    {
        if ($this->dayOfMonthIndicator < 0) {
            $n = Utils::lengthOfMonth($this->month, Utils::isLeapYear($this->year));
            $localDate = new LocalDate($this->year, $this->month, $n + 1 + $this->dayOfMonthIndicator);

            if (-1 !== $this->dayOfWeek) {
                $localDate = Utils::previousOrSame($localDate, $this->dayOfWeek);
            }
        } else {
            $localDate = new LocalDate($this->year, $this->month, $this->dayOfMonthIndicator);

            if (-1 !== $this->dayOfWeek) {
                $localDate = Utils::nextOrSame($localDate, $this->dayOfWeek);
            }
        }

        if ($this->timeEndOfDay) {
            $localDate = $localDate->plusDays(1);
        }

        return $localDate;
    }

    public static function compare(self $a, self $b) : int
    {
        $result = $a->year - $b->year;

        if (0 === $result) {
            $result = $a->month - $b->month;
        }

        if (0 === $result) {
            $result = $a->toLocalDate()->compareTo($b->toLocalDate());
        }

        if (0 === $result) {
            $result = $a->time->compareTo($b->time);
        }

        return $result;
    }
}
