<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Ojinaga implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        891421200,
    ];
    public const STANDARD_OFFSETS = [
        -25060,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        828864000,
        842770800,
        860313600,
        874220400,
        891421200,
        891766800,
        905673600,
        923216400,
        937123200,
        954666000,
        968572800,
        989139600,
        997603200,
        1018170000,
        1031472000,
        1049619600,
        1062921600,
        1081069200,
        1094976000,
        1112518800,
        1126425600,
        1143968400,
        1157875200,
        1175418000,
        1189324800,
        1207472400,
        1220774400,
        1238922000,
        1252828800,
        1268557200,
        1289116800,
        1300006800,
        1320566400,
    ];
    public const WALL_OFFSETS = [
        -25060,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -25200,
            'offsetAfter' => -21600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -21600,
            'offsetAfter' => -25200,
        ],
    ];
}