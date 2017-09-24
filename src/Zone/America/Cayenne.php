<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Cayenne implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1846269040,
        -71092800,
    ];
    public const STANDARD_OFFSETS = [
        -12560,
        -14400,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1846269040,
        -71092800,
    ];
    public const WALL_OFFSETS = [
        -12560,
        -14400,
        -10800,
    ];
    public const LAST_RULES = [
    ];
}
