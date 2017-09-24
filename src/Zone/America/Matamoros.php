<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Matamoros implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514743200,
    ];
    public const STANDARD_OFFSETS = [
        -24000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514743200,
        568015200,
        576054000,
        576057600,
        599634000,
        828864000,
        845190000,
        860313600,
        876639600,
        891763200,
        908089200,
        923212800,
        939538800,
        954662400,
        970988400,
        989136000,
        1000018800,
        1018166400,
        1034492400,
        1049616000,
        1065942000,
        1081065600,
        1097391600,
        1112515200,
        1128841200,
        1143964800,
        1160290800,
        1175414400,
        1191740400,
        1207468800,
        1223794800,
        1238918400,
        1255244400,
        1268553600,
        1289113200,
        1300003200,
        1320562800,
    ];
    public const WALL_OFFSETS = [
        -24000,
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
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -21600,
            'offsetAfter' => -18000,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -18000,
            'offsetAfter' => -21600,
        ],
    ];
}