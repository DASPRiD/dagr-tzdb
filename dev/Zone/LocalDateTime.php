<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class LocalDateTime
{
    /**
     * @var LocalDate
     */
    private $date;

    /**
     * @var LocalTime
     */
    private $time;

    /**
     * @var self
     */
    private static $min;

    /**
     * @var self
     */
    private static $max;

    public function __construct(LocalDate $date, LocalTime $time)
    {
        $this->date = $date;
        $this->time = $time;
    }

    public static function min() : self
    {
        return self::$min ?: self::$min = new self(LocalDate::min(), LocalTime::min());
    }

    public static function max() : self
    {
        return self::$max ?: self::$max = new self(LocalDate::max(), LocalTime::max());
    }

    public static function ofEpochSecond(int $epochSecond, int $zoneOffset) : self
    {
        $l2 = $epochSecond + $zoneOffset;
        $epochDay = Utils::floorDiv($l2, 86400);
        $secondOfDay = Utils::floorMod($l2, 86400);

        return new self(
            LocalDate::ofEpochDay($epochDay),
            LocalTime::ofSecondOfDay($secondOfDay)
        );
    }

    public function getDate() : LocalDate
    {
        return $this->date;
    }

    public function getYear() : int
    {
        return $this->date->getYear();
    }

    public function getMonth() : int
    {
        return $this->date->getMonth();
    }

    public function getDay() : int
    {
        return $this->date->getMonth();
    }

    public function getTime() : LocalTime
    {
        return $this->time;
    }

    public function getHour() : int
    {
        return $this->time->getHour();
    }

    public function getMinute() : int
    {
        return $this->time->getMinute();
    }

    public function getSecond() : int
    {
        return $this->time->getSecond();
    }

    public function with(LocalDate $date, LocalTime $time) : self
    {
        if ($date->equals($this->date) && $time->equals($this->time)) {
            return $this;
        }

        return new self($date, $time);
    }

    public function plusSeconds(int $seconds) : self
    {
        if (0 === $seconds) {
            return $this;
        }

        $l4 = intdiv($seconds, 86400);
        $l5 = $seconds % 86400;
        $l6 = $this->time->toSecondOfDay();
        $l5 = $l5 + $l6;
        $n2 = Utils::floorMod($l5, 86400);

        return $this->with(
            $this->date->plusDays($l4 + Utils::floorDiv($l5, 86400)),
            $n2 === $l6 ? $this->time : LocalTime::ofSecondOfDay($n2)
        );
    }

    public function toEpochSeconds(int $zoneOffset) : int
    {
        return $this->date->toEpochDay() * 86400 + $this->time->toSecondOfDay() - $zoneOffset;
    }

    public function equals(self $other) : bool
    {
        return $this->date->equals($other->date) && $this->time->equals($other->time);
    }

    public function compareTo(self $other) : int
    {
        $result = $this->date->compareTo($other->date);

        if (0 !== $result) {
            return $result;
        }

        return $this->time->compareTo($other->time);
    }
}
