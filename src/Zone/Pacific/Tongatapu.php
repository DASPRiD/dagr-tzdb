<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tongatapu implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177497160,
        -915193200,
    ];
    public const STANDARD_OFFSETS = [
        44360,
        44400,
        46800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177497160,
        -915193200,
        939214800,
        953384400,
        973342800,
        980596800,
        1004792400,
        1012046400,
        1478350800,
        1484398800,
        1509800400,
        1516453200,
        1541250000,
    ];
    public const WALL_OFFSETS = [
        44360,
        44400,
        46800,
        50400,
        46800,
        50400,
        46800,
        50400,
        46800,
        50400,
        46800,
        50400,
        46800,
        50400,
    ];
    public const LAST_RULES = [
        [
            'month' => 1,
            'dayOfMonth' => 15,
            'dayOfWeek' => 0,
            'time' => 10800,
            'timeEndOfDay' => false,
            'standardOffset' => 46800,
            'offsetBefore' => 50400,
            'offsetAfter' => 46800,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 46800,
            'offsetBefore' => 46800,
            'offsetAfter' => 50400,
        ],
    ];
}
