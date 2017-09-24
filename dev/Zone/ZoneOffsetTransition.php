<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

use DomainException;

final class ZoneOffsetTransition
{
    /**
     * @var LocalDateTime
     */
    private $transition;

    /**
     * @var int
     */
    private $offsetBefore;

    /**
     * @var int
     */
    private $offsetAfter;

    public function __construct(LocalDateTime $transition, int $offsetBefore, int $offsetAfter)
    {
        if ($offsetBefore === $offsetAfter) {
            throw new DomainException('Offsets must not be equal');
        }

        $this->transition = $transition;
        $this->offsetBefore = $offsetBefore;
        $this->offsetAfter = $offsetAfter;
    }

    public function toEpochSecond() : int
    {
        return $this->transition->toEpochSeconds($this->offsetBefore);
    }

    public function getOffsetAfter() : int
    {
        return $this->offsetAfter;
    }
}
