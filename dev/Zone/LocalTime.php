<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class LocalTime
{
    /**
     * @var int
     */
    private $hour;

    /**
     * @var int
     */
    private $minute;

    /**
     * @var int
     */
    private $second;

    /**
     * @var self
     */
    private static $min;

    /**
     * @var self
     */
    private static $max;

    /**
     * @var self
     */
    private static $midnight;

    /**
     * @var self[]
     */
    private static $hours;

    public function __construct(int $hour, int $minute, int $second)
    {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public static function min() : self
    {
        return self::$min ?: self::$min = self::hour(0);
    }

    public static function max() : self
    {
        return self::$max ?: self::$max = new self(23, 59, 59);
    }

    public static function midnight() : self
    {
        return self::$midnight ?: self::$midnight = self::hour(0);
    }

    public static function hour(int $hour) : self
    {
        return self::$hours[$hour] ?? self::$hours[$hour] = new self($hour, 0, 0);
    }

    public static function ofSecondOfDay(int $second) : self
    {
        $n2 = intdiv($second, 3600);
        $second -= $n2 * 3600;
        $n3 = intdiv($second, 60);

        return new self($n2, $n3, $second - $n3 * 60);
    }

    public function getHour() : int
    {
        return $this->hour;
    }

    public function getMinute() : int
    {
        return $this->minute;
    }

    public function getSecond() : int
    {
        return $this->second;
    }

    public function toSecondOfDay() : int
    {
        return $this->hour * 3600 + $this->minute * 60 + $this->second;
    }

    public function equals(self $other) : bool
    {
        return $this->hour === $other->hour && $this->minute === $other->minute && $this->second === $other->second;
    }

    public function compareTo(self $other) : int
    {
        $hourCompare = $this->hour < $other->hour ? -1 : ($this->hour > $other->hour ? 1 : 0);

        if (0 !== $hourCompare) {
            return $hourCompare;
        }

        $minuteCompare = $this->minute < $other->minute ? -1 : ($this->minute > $other->minute ? 1 : 0);

        if (0 !== $minuteCompare) {
            return $minuteCompare;
        }

        $secondCompare = $this->second < $other->second ? -1 : ($this->second > $other->second ? 1 : 0);

        if (0 !== $secondCompare) {
            return $secondCompare;
        }

        return 0;
    }
}
