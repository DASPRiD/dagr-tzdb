<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Mazatlan implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        -873828000,
        -661539600,
        28800,
    ];
    public const STANDARD_OFFSETS = [
        -25540,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -28800,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        -873828000,
        -661539600,
        28800,
        828867600,
        840355200,
        860317200,
        871804800,
        891766800,
        903254400,
        923216400,
        934704000,
        954666000,
        966758400,
        989139600,
        995184000,
        1018170000,
        1029657600,
        1049619600,
        1061107200,
    ];
    public const WALL_OFFSETS = [
        -25540,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -28800,
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
            'dayOfMonth' => 14,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -21600,
            'offsetAfter' => -25200,
        ],
    ];
}
