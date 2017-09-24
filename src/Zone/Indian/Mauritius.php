<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Mauritius implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1988164200,
    ];
    public const STANDARD_OFFSETS = [
        13800,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1988164200,
        403041600,
        417034800,
        1224972000,
        1238274000,
    ];
    public const WALL_OFFSETS = [
        13800,
        14400,
        18000,
        14400,
        18000,
        14400,
    ];
    public const LAST_RULES = [
    ];
}
