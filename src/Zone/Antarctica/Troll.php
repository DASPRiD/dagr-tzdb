<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Troll implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
    ];
    public const STANDARD_OFFSETS = [
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        1111885200,
        1130634000,
        1143334800,
        1162083600,
    ];
    public const WALL_OFFSETS = [
        0,
        7200,
        0,
        7200,
        0,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 0,
            'offsetAfter' => 7200,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 7200,
            'offsetAfter' => 0,
        ],
    ];
}
