<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Godthab implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1686083584,
    ];
    public const STANDARD_OFFSETS = [
        -12416,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1686083584,
        323845200,
        331693200,
        347418000,
        363142800,
        378867600,
        394592400,
        410317200,
        426042000,
        441766800,
        458096400,
        473821200,
        489546000,
        505270800,
        520995600,
        536720400,
        552445200,
        568170000,
        583894800,
        599619600,
        615344400,
        631674000,
        647398800,
        663123600,
        678848400,
        694573200,
        710298000,
        726022800,
        741747600,
        757472400,
        773197200,
        788922000,
        804646800,
        820976400,
        839120400,
        852426000,
        870570000,
    ];
    public const WALL_OFFSETS = [
        -12416,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
    ];
    public const LAST_RULES = [
        [
            'month' => 1,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => -10800,
            'offsetBefore' => -10800,
            'offsetAfter' => -7200,
        ],
        [
            'month' => 8,
            'dayOfMonth' => 2,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => -10800,
            'offsetBefore' => -7200,
            'offsetAfter' => -10800,
        ],
    ];
}
