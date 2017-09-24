<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Chihuahua implements ZoneInfoInterface
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
        -25460,
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
        841561200,
        860313600,
        873615600,
        891421200,
        891766800,
        904464000,
        923216400,
        935913600,
        954666000,
        967363200,
        989139600,
        996393600,
        1018170000,
        1030867200,
        1049619600,
        1062316800,
    ];
    public const WALL_OFFSETS = [
        -25460,
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
    ];
    public const LAST_RULES = [
        [
            'month' => 4,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -25200,
            'offsetAfter' => -21600,
        ],
        [
            'month' => 8,
            'dayOfMonth' => 26,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -21600,
            'offsetAfter' => -25200,
        ],
    ];
}
