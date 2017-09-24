<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Caracas implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524505536,
        -1826739140,
        -157750200,
        1197183600,
        1462086000,
    ];
    public const STANDARD_OFFSETS = [
        -16064,
        -16060,
        -16200,
        -14400,
        -16200,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524505536,
        -1826739140,
        -157750200,
        1197183600,
        1462086000,
    ];
    public const WALL_OFFSETS = [
        -16064,
        -16060,
        -16200,
        -14400,
        -16200,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
