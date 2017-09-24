<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Bogota implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1739041424,
    ];
    public const STANDARD_OFFSETS = [
        -17776,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1739041424,
        704869200,
        733896000,
    ];
    public const WALL_OFFSETS = [
        -17776,
        -18000,
        -14400,
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
