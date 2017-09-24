<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Prague implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2469401864,
    ];
    public const STANDARD_OFFSETS = [
        3464,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2469401864,
        -1693706400,
        -1680483600,
        -1663455600,
        -1650150000,
        -1632006000,
        -1618700400,
        -938905200,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -798073200,
        -780534000,
        -761180400,
        -746578800,
        -733359600,
        -716425200,
        -701910000,
        -684975600,
        -670460400,
        -654217200,
        -639010800,
        291776400,
        302662800,
        323830800,
        334112400,
        349837200,
        365562000,
        381286800,
        397011600,
        413341200,
        429066000,
        444790800,
        460515600,
        476240400,
        491965200,
        507690000,
        523414800,
        539139600,
        554864400,
        570589200,
        586918800,
        602643600,
        618368400,
        634093200,
        649818000,
        665542800,
        681267600,
        696992400,
        712717200,
        728442000,
        744166800,
        760496400,
        776221200,
        791946000,
        807670800,
        823395600,
        841539600,
        854845200,
        873594000,
    ];
    public const WALL_OFFSETS = [
        3464,
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
    ];
    public const LAST_RULES = [
        [
            'month' => 1,
            'dayOfMonth' => 31,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
    ];
}