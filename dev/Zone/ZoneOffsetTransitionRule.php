<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

use DomainException;

final class ZoneOffsetTransitionRule
{
    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $dayOfMonth;

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
    private $standardOffset;

    /**
     * @var int
     */
    private $offsetBefore;

    /**
     * @var int
     */
    private $offsetAfter;

    public function __construct(
        int $month,
        int $dayOfMonth,
        int $dayOfWeek,
        LocalTime $time,
        bool $timeEndOfDay,
        TimeDefinition $timeDefinition,
        int $standardOffset,
        int $offsetBefore,
        int $offsetAfter
    ) {
        if ($month < 1 || $month > 12) {
            throw new DomainException('Month must be between 1 and 12');
        }

        if ($dayOfMonth < -28 || $dayOfMonth > 31 || 0 === $dayOfMonth) {
            throw new DomainException('Day of month indicator must be between -28 and 31 inclusive excluding zero');
        }

        if ($timeEndOfDay && !$time->equals(LocalTime::midnight())) {
            throw new DomainException('Time must be midnight when end of day flag is true');
        }

        $this->month = $month;
        $this->dayOfMonth = $dayOfMonth;
        $this->dayOfWeek = $dayOfWeek;
        $this->time = $time;
        $this->timeEndOfDay = $timeEndOfDay;
        $this->timeDefinition = $timeDefinition;
        $this->standardOffset = $standardOffset;
        $this->offsetBefore = $offsetBefore;
        $this->offsetAfter = $offsetAfter;
    }

    public function equals(self $other) : bool
    {
        return (
            $this->month === $other->month
            && $this->dayOfMonth === $other->month
            && $this->dayOfWeek === $other->dayOfWeek
            && $this->time->equals($other->time)
            && $this->timeEndOfDay === $other->timeEndOfDay
            && $this->timeDefinition === $other->timeDefinition
            && $this->standardOffset === $other->standardOffset
            && $this->offsetBefore === $other->offsetBefore
            && $this->offsetAfter === $other->offsetAfter
        );
    }

    public function getMonth() : int
    {
        return $this->month;
    }

    public function getDayOfMonth() : int
    {
        return $this->dayOfMonth;
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

    public function getStandardOffset() : int
    {
        return $this->standardOffset;
    }

    public function getOffsetBefore() : int
    {
        return $this->offsetBefore;
    }

    public function getOffsetAfter() : int
    {
        return $this->offsetAfter;
    }
}
