<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Resolute implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -704937600,
        972806400,
        986112000,
        1162105200,
        1173600000,
    ];
    public const STANDARD_OFFSETS = [
        0,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -704937600,
        -148500000,
        -132775200,
        324460800,
        340786800,
        355910400,
        372236400,
        387964800,
        403686000,
        419414400,
        435135600,
        450864000,
        466585200,
        482313600,
        498034800,
        513763200,
        530089200,
        544608000,
        561538800,
        576057600,
        592988400,
        607507200,
        624438000,
        638956800,
        655887600,
        671011200,
        687337200,
        702460800,
        719391600,
        733910400,
        750841200,
        765360000,
        782290800,
        796809600,
        813740400,
        828864000,
        845190000,
        860313600,
        877244400,
        891763200,
        908694000,
        923212800,
        940143600,
        954662400,
        971593200,
        972806400,
        1016348400,
        1018166400,
        1047798000,
        1049616000,
        1079247600,
        1081065600,
        1110697200,
        1112515200,
        1142146800,
        1143964800,
        1194159600,
        1205049600,
        1225609200,
    ];
    public const WALL_OFFSETS = [
        0,
        -21600,
        -14400,
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
