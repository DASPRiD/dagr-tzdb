<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class Utils
{
    public static function floorDiv(int $a, int $b) : int
    {
        $result = intdiv($a, $b);

        if (($a ^ $b) < 0 && $result * $b !== $a) {
            --$result;
        }

        return $result;
    }

    public static function floorMod(int $a, int $b) : int
    {
        return $a - self::floorDiv($a, $b) * $b;
    }

    public static function isLeapYear(int $year) : bool
    {
        return 0 === ($year & 3) && (0 !== $year % 100 || 0 === $year % 400);
    }

    public static function lengthOfMonth(int $month, bool $leapYear) : int
    {
        switch ($month) {
            case 2:
                return $leapYear ? 29 : 28;

            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
        }

        return 31;
    }

    public static function maxLengthOfMonth(int $month) : int
    {
        switch ($month) {
            case 2:
                return 29;

            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
        }

        return 31;
    }

    public static function plusDayOfWeek(int $n, int $l) : int
    {
        $n2 = $l % 7;
        return ($n - 1 + ($n2 + 7)) % 7 + 1;
    }

    public static function previousOrSame(LocalDate $localDate, int $dayOfWeek) : LocalDate
    {
        return self::adjust($localDate, $dayOfWeek, true);
    }

    public static function nextOrSame(LocalDate $localDate, int $dayOfWeek) : LocalDate
    {
        return self::adjust($localDate, $dayOfWeek, false);
    }

    private static function adjust(LocalDate $localDate, int $dayOfWeek, bool $backward) : LocalDate
    {
        $currentDayOfWeek = $localDate->getDayOfWeek();

        if ($currentDayOfWeek === $dayOfWeek) {
            return $localDate;
        }

        if (!$backward) {
            $adjust = $currentDayOfWeek - $dayOfWeek;
            return $localDate->plusDays($adjust >= 0 ? (7 - $adjust) : (-$adjust));
        }

        $adjust = $dayOfWeek - $currentDayOfWeek;
        return $localDate->minusDays($adjust >= 0 ? (7 - $adjust) : (-$adjust));
    }
}
