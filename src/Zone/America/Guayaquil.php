<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Guayaquil implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524502440,
        -1230749160,
    ];
    public const STANDARD_OFFSETS = [
        -19160,
        -18840,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524502440,
        -1230749160,
        722926800,
        728884800,
    ];
    public const WALL_OFFSETS = [
        -19160,
        -18840,
        -18000,
        -14400,
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
