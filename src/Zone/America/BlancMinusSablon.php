<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class BlancMinusSablon implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2713896692,
    ];
    public const STANDARD_OFFSETS = [
        -13708,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2713896692,
        -1632074400,
        -1615143600,
        -880221600,
        -765399600,
    ];
    public const WALL_OFFSETS = [
        -13708,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
