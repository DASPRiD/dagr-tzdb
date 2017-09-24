<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Nairobi implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1309746436,
        -1262314800,
        -946780200,
        -315629100,
    ];
    public const STANDARD_OFFSETS = [
        8836,
        10800,
        9000,
        9900,
        10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1309746436,
        -1262314800,
        -946780200,
        -315629100,
    ];
    public const WALL_OFFSETS = [
        8836,
        10800,
        9000,
        9900,
        10800,
    ];
    public const LAST_RULES = [
    ];
}
