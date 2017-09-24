<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Galapagos implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1230746496,
        504939600,
    ];
    public const STANDARD_OFFSETS = [
        -21504,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1230746496,
        504939600,
        722930400,
        728888400,
    ];
    public const WALL_OFFSETS = [
        -21504,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
