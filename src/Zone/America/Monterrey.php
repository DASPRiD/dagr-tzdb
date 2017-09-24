<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Monterrey implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514743200,
    ];
    public const STANDARD_OFFSETS = [
        -24076,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514743200,
        568015200,
        574844400,
        576057600,
        599634000,
        828864000,
        844585200,
        860313600,
        876034800,
        891763200,
        907484400,
        923212800,
        938934000,
        954662400,
        970383600,
        989136000,
        999414000,
        1018166400,
        1033887600,
        1049616000,
        1065337200,
    ];
    public const WALL_OFFSETS = [
        -24076,
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
            'month' => 10,
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
