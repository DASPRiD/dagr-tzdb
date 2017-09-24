<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Creston implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2713882436,
        -1680454800,
        -1627833600,
    ];
    public const STANDARD_OFFSETS = [
        -27964,
        -25200,
        -28800,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2713882436,
        -1680454800,
        -1627833600,
    ];
    public const WALL_OFFSETS = [
        -27964,
        -25200,
        -28800,
        -25200,
    ];
    public const LAST_RULES = [
    ];
}
