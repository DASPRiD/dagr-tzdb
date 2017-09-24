<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class LocalDate
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
    private $day;

    /**
     * @var self
     */
    private static $min;

    /**
     * @var self
     */
    private static $max;

    public function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public static function min() : self
    {
        return self::$min ?: self::$min = new self(-999999999, 1, 1);
    }

    public static function max() : self
    {
        return self::$max ?: self::$max = new self(999999999, 12, 31);
    }

    public static function ofEpochDay(int $epochDay) : self
    {
        $l4 = $epochDay + 719528 - 60;
        $l5 = 0;

        if ($l4 < 0) {
            $l3 = intdiv($l4 + 1, 146097) - 1;
            $l5 = $l3 * 400;
            $l4 += (-$l3) * 146097;
        }

        $l3 = intdiv(400 * $l4 + 591, 146097);
        $l2 = $l4 - (365 * $l3 + intdiv($l3, 4) - intdiv($l3, 100) + intdiv($l3, 400));

        if ($l2 < 0) {
            $l2 = $l4 - (365 * $l3 + intdiv($l3, 4) - intdiv($l3, 100) + intdiv(--$l3, 400));
        }

        $l3 += $l5;
        $n = $l2;
        $n2 = intdiv($n * 5 + 2, 153);
        $n3 = ($n2 + 2) % 12 + 1;
        $n4 = $n - intdiv($n2 * 306 + 5, 10) + 1;
        $n5 = $l3 + intdiv($n2, 10);

        return new self($n5, $n3, $n4);
    }

    public function getYear() : int
    {
        return $this->year;
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function getDayOfMonth() : int
    {
        return $this->day;
    }

    public function getDayOfWeek() : int
    {
        return Utils::floorMod($this->toEpochDay() + 3, 7) + 1;
    }

    public function plusDays(int $days) : self
    {
        if (0 === $days) {
            return $this;
        }

        return self::ofEpochDay($this->toEpochDay() + $days);
    }

    public function minusDays(int $days) : self
    {
        return self::plusDays(-$days);
    }

    public function toEpochDay() : int
    {
        $epochDay = 365 * $this->year;

        if ($this->year >= 0) {
            $epochDay += intdiv($this->year + 3, 4) - intdiv($this->year + 99, 100) + intdiv($this->year + 399, 400);
        } else {
            $epochDay -= intdiv($this->year, -4) - intdiv($this->year, -100) + intdiv($this->year, -400);
        }

        $epochDay += intdiv(367 * $this->month - 362, 12);
        $epochDay += $this->day - 1;

        if ($this->month > 2) {
            --$epochDay;

            if (!Utils::isLeapYear($this->year)) {
                --$epochDay;
            }
        }

        return $epochDay - 719528;
    }

    public function equals(self $other) : bool
    {
        return $this->year === $other->year && $this->month === $other->month && $this->day === $other->day;
    }

    public function compareTo(self $other) : int
    {
        $yearCompare = $this->year < $other->year ? -1 : ($this->year > $other->year ? 1 : 0);

        if (0 !== $yearCompare) {
            return $yearCompare;
        }

        $monthCompare = $this->month < $other->month ? -1 : ($this->month > $other->month ? 1 : 0);

        if (0 !== $monthCompare) {
            return $monthCompare;
        }

        $dayCompare = $this->day < $other->day ? -1 : ($this->day > $other->day ? 1 : 0);

        if (0 !== $dayCompare) {
            return $dayCompare;
        }

        return 0;
    }
}
