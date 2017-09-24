<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Fiji implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1709985344,
    ];
    public const STANDARD_OFFSETS = [
        42944,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1709985344,
        909842400,
        920124000,
        941896800,
        951573600,
        1259416800,
        1269698400,
        1287842400,
        1299333600,
        1319292000,
        1327154400,
        1350741600,
        1358604000,
        1382796000,
        1390050000,
        1414850400,
        1421503200,
        1446300000,
        1452952800,
        1478354400,
    ];
    public const WALL_OFFSETS = [
        42944,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
        43200,
        46800,
    ];
    public const LAST_RULES = [
        [
            'month' => 1,
            'dayOfMonth' => 15,
            'dayOfWeek' => 0,
            'time' => 10800,
            'timeEndOfDay' => false,
            'standardOffset' => 43200,
            'offsetBefore' => 46800,
            'offsetAfter' => 43200,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 43200,
            'offsetBefore' => 43200,
            'offsetAfter' => 46800,
        ],
    ];
}
