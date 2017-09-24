<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Andorra implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177453164,
        -733881600,
    ];
    public const STANDARD_OFFSETS = [
        364,
        0,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177453164,
        -733881600,
        481078800,
        493779600,
        510109200,
        525834000,
        541558800,
        557283600,
        573008400,
        588733200,
        604458000,
        620182800,
        635907600,
        651632400,
        667357200,
        683082000,
        699411600,
        715136400,
        699325200,
        746586000,
        762310800,
        778035600,
        793760400,
        809485200,
        825210000,
        843958800,
        857264400,
        875408400,
    ];
    public const WALL_OFFSETS = [
        364,
        0,
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
    ];
    public const LAST_RULES = [
        [
            'month' => 2,
            'dayOfMonth' => 24,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
    ];
}
