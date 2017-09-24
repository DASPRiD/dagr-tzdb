<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Apia implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2855737984,
        -1861878784,
        -631110600,
        1325239200,
    ];
    public const STANDARD_OFFSETS = [
        45184,
        -41216,
        -41400,
        -39600,
        46800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2855737984,
        -1861878784,
        -631110600,
        1285498800,
        1302184800,
        1317304800,
        1325239200,
        1333202400,
        1348322400,
        1365256800,
        1379772000,
    ];
    public const WALL_OFFSETS = [
        45184,
        -41216,
        -41400,
        -39600,
        -36000,
        -39600,
        -36000,
        50400,
        46800,
        50400,
        46800,
        50400,
    ];
    public const LAST_RULES = [
        [
            'month' => 4,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 14400,
            'timeEndOfDay' => false,
            'standardOffset' => 46800,
            'offsetBefore' => 50400,
            'offsetAfter' => 46800,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 18,
            'dayOfWeek' => 0,
            'time' => 10800,
            'timeEndOfDay' => false,
            'standardOffset' => 46800,
            'offsetBefore' => 46800,
            'offsetAfter' => 50400,
        ],
    ];
}
