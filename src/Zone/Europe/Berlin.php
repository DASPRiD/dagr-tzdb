<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Berlin implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2422054408,
    ];
    public const STANDARD_OFFSETS = [
        3208,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2422054408,
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
        -796777200,
        -781052400,
        -776563200,
        -765936000,
        -761180400,
        -748479600,
        -733273200,
        -717631200,
        -714610800,
        -710380800,
        -701910000,
        -684975600,
        -670460400,
        -654130800,
        -639010800,
        323830800,
        329274000,
        376448400,
        392173200,
        407898000,
        423622800,
        439347600,
        455072400,
        470797200,
        486522000,
        502851600,
        518576400,
        534301200,
        550026000,
        565750800,
        581475600,
        597200400,
        612925200,
        628650000,
        644374800,
        660099600,
        675824400,
        692154000,
        707878800,
        723603600,
        739328400,
        755053200,
        770778000,
        786502800,
        802227600,
        817952400,
        836701200,
        850006800,
        868150800,
        881456400,
    ];
    public const WALL_OFFSETS = [
        3208,
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
        10800,
        7200,
        3600,
        7200,
        3600,
        7200,
        10800,
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
            'month' => 7,
            'dayOfMonth' => 3,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 12,
            'dayOfMonth' => 2,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}
