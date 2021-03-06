<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Stockholm implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2871681132,
        -2208992414,
    ];
    public const STANDARD_OFFSETS = [
        4332,
        3614,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2871681132,
        -2208992414,
        -1692496800,
        -1680483600,
        323830800,
        347418000,
        363142800,
        378867600,
        394592400,
        410317200,
        426042000,
        441766800,
        457491600,
        473216400,
        488941200,
        504666000,
        520390800,
        536720400,
        552445200,
        568170000,
        583894800,
        599619600,
        615344400,
        631069200,
        646794000,
        662518800,
        678243600,
        693968400,
        710298000,
        726022800,
        741747600,
        757472400,
        773197200,
        788922000,
        804646800,
        820371600,
        836096400,
        854845200,
        867546000,
    ];
    public const WALL_OFFSETS = [
        4332,
        3614,
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
            'month' => 1,
            'dayOfMonth' => 29,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 6,
            'dayOfMonth' => 29,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}
