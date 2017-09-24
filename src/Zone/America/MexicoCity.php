<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class MexicoCity implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
    ];
    public const STANDARD_OFFSETS = [
        -23796,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        -975261600,
        -963169200,
        -917114400,
        -907354800,
        -821901600,
        -810068400,
        -627501600,
        -612990000,
        828864000,
        843980400,
        860313600,
        875430000,
        891763200,
        906879600,
        923212800,
        938329200,
        954662400,
        970383600,
        989136000,
        998809200,
        1018166400,
        1032678000,
        1049616000,
        1064127600,
    ];
    public const WALL_OFFSETS = [
        -23796,
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
            'month' => 9,
            'dayOfMonth' => 19,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -18000,
            'offsetAfter' => -21600,
        ],
    ];
}
