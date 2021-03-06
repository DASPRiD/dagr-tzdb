<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Budapest implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2500938980,
    ];
    public const STANDARD_OFFSETS = [
        4580,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2500938980,
        -1693706400,
        -1680483600,
        -1663455600,
        -1650150000,
        -1633212000,
        -1618700400,
        -1600466400,
        -1581202800,
        -906771600,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -796777200,
        -778471200,
        -762660000,
        -749689200,
        -733359600,
        -717634800,
        -701910000,
        -686185200,
        -670460400,
        -654130800,
        -639010800,
        -621990000,
        -605660400,
        -492656400,
        -481168800,
        -461120400,
        -449632800,
        -428547600,
        -418874400,
        -397094400,
        -387414000,
        323827200,
        338950800,
        374634000,
        390358800,
        406083600,
        421808400,
        438138000,
        453862800,
        469587600,
        485312400,
        501037200,
        516762000,
        532486800,
        548211600,
        563936400,
        579661200,
        595990800,
        611715600,
        627440400,
        643165200,
        658890000,
        674614800,
        690339600,
        706064400,
        721789200,
        737514000,
        753238800,
        768963600,
        785293200,
        801018000,
        816742800,
        834886800,
        848192400,
        866336400,
        879642000,
    ];
    public const WALL_OFFSETS = [
        4580,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
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
            'month' => 6,
            'dayOfMonth' => 15,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 14,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}
