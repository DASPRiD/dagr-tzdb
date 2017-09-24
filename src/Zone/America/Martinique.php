<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Martinique implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1851537340,
    ];
    public const STANDARD_OFFSETS = [
        -14660,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1851537340,
        323841600,
        338958000,
    ];
    public const WALL_OFFSETS = [
        -14660,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
