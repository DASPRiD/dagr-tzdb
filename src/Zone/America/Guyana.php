<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Guyana implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1730578040,
        176010300,
        662698800,
    ];
    public const STANDARD_OFFSETS = [
        -13960,
        -13500,
        -10800,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1730578040,
        176010300,
        662698800,
    ];
    public const WALL_OFFSETS = [
        -13960,
        -13500,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
