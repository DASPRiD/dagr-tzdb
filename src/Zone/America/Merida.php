<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Merida implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514743200,
        377935200,
        407653200,
    ];
    public const STANDARD_OFFSETS = [
        -21508,
        -21600,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514743200,
        377935200,
        407653200,
        828864000,
        845190000,
        860313600,
        877244400,
        891763200,
        908694000,
        923212800,
        940143600,
        954662400,
        971593200,
        989136000,
        1000623600,
        1018166400,
        1034492400,
        1049616000,
        1066546800,
    ];
    public const WALL_OFFSETS = [
        -21508,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
        [
            'month' => 4,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -21600,
            'offsetAfter' => -18000,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 13,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -18000,
            'offsetAfter' => -21600,
        ],
    ];
}
