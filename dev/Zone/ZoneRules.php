<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

use DomainException;

final class ZoneRules
{
    /**
     * @var int[]
     */
    private $standardTransitions = [];

    /**
     * @var int[]
     */
    private $standardOffsets = [];

    /**
     * @var int[]
     */
    private $savingsInstantTransitions = [];

    /**
     * @var int[]
     */
    private $wallOffsets = [];

    /**
     * @var ZoneOffsetTransitionRule[]
     */
    private $lastRules = [];

    /**
     * @param $standard ZoneOffsetTransition[]
     * @param $savings ZoneOffsetTransition[]
     * @param $lastRules ZoneOffsetTransitionRule[]
     */
    public function __construct(
        int $firstZoneOffset,
        int $firstZoneSavingsOffset,
        array $standard,
        array $savings,
        array $lastRules
    ) {
        $this->standardOffsets[] = $firstZoneOffset;

        foreach ($standard as $transition) {
            $this->standardTransitions[] = $transition->toEpochSecond();
            $this->standardOffsets[] = $transition->getOffsetAfter();
        }

        $this->wallOffsets[] = $firstZoneSavingsOffset;

        foreach ($savings as $transition) {
            $this->wallOffsets[] = $transition->getOffsetAfter();
            $this->savingsInstantTransitions[] = $transition->toEpochSecond();
        }

        if (count($lastRules) > 16) {
            throw new DomainException('Too many transition rules');
        }

        $this->lastRules = $lastRules;
    }

    /**
     * @return int[]
     */
    public function getStandardTransitions() : array
    {
        return $this->standardTransitions;
    }

    /**
     * @return int[]
     */
    public function getStandardOffsets() : array
    {
        return $this->standardOffsets;
    }

    /**
     * @return int[]
     */
    public function getSavingsInstantTransitions() : array
    {
        return $this->savingsInstantTransitions;
    }

    /**
     * @return int[]
     */
    public function getWallOffsets() : array
    {
        return $this->wallOffsets;
    }

    /**
     * @return ZoneOffsetTransitionRule[]
     */
    public function getLastRules() : array
    {
        return $this->lastRules;
    }
}
