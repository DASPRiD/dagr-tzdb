<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Johannesburg implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2458173120,
        -2109288600,
    ];
    public const STANDARD_OFFSETS = [
        6720,
        5400,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2458173120,
        -2109288600,
        -860976000,
        -845254800,
        -829526400,
        -813805200,
    ];
    public const WALL_OFFSETS = [
        6720,
        5400,
        7200,
        10800,
        7200,
        10800,
        7200,
    ];
    public const LAST_RULES = [
    ];
}
