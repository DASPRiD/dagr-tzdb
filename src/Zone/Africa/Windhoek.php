<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Windhoek implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2458170504,
        -2109288600,
        765324000,
    ];
    public const STANDARD_OFFSETS = [
        4104,
        5400,
        7200,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2458170504,
        -2109288600,
        -860976000,
        -845254800,
        765324000,
        778640400,
        796780800,
        810090000,
        828835200,
        841539600,
    ];
    public const WALL_OFFSETS = [
        4104,
        5400,
        7200,
        10800,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
    ];
    public const LAST_RULES = [
        [
            'month' => 4,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}
