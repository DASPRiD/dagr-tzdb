<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Zaporozhye implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840149240,
        -1441160400,
        -1247536800,
        -894769200,
        -826419600,
        670374000,
    ];
    public const STANDARD_OFFSETS = [
        8440,
        8400,
        7200,
        10800,
        3600,
        10800,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840149240,
        -1441160400,
        -1247536800,
        -894769200,
        -857257200,
        -844556400,
        -828226800,
        -826419600,
        354920400,
        370728000,
        386456400,
        402264000,
        417992400,
        433800000,
        449614800,
        473814000,
        489538800,
        505263600,
        520988400,
        536713200,
        552438000,
        568767600,
        584492400,
        600217200,
        615942000,
        631666800,
        647391600,
        663116400,
        682462800,
        698191200,
        713912400,
        729640800,
        745362000,
        761090400,
        776811600,
        800413200,
        816138000,
        831862800,
        850611600,
        863917200,
        882061200,
    ];
    public const WALL_OFFSETS = [
        8440,
        8400,
        7200,
        10800,
        7200,
        3600,
        7200,
        3600,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
    ];
    public const LAST_RULES = [
        [
            'month' => 5,
            'dayOfMonth' => 12,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 7200,
            'offsetAfter' => 10800,
        ],
        [
            'month' => 12,
            'dayOfMonth' => 12,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 10800,
            'offsetAfter' => 7200,
        ],
    ];
}