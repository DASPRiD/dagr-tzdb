<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Barbados implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1199217691,
    ];
    public const STANDARD_OFFSETS = [
        -14309,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1199217691,
        234943200,
        244616400,
        261554400,
        276066000,
        293004000,
        307515600,
        325058400,
        338706000,
    ];
    public const WALL_OFFSETS = [
        -14309,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
