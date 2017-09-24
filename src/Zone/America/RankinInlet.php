<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class RankinInlet implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -410227200,
        972806400,
        986112000,
    ];
    public const STANDARD_OFFSETS = [
        0,
        -21600,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -410227200,
        -149104800,
        -133380000,
        323856000,
        340182000,
        355910400,
        371631600,
        387360000,
        403081200,
        418809600,
        434530800,
        450259200,
        465980400,
        481708800,
        498034800,
        513158400,
        529484400,
        544608000,
        560934000,
        576057600,
        592383600,
        607507200,
        623833200,
        638956800,
        655282800,
        671011200,
        687337200,
        702460800,
        718786800,
        733910400,
        750236400,
        765360000,
        781686000,
        796809600,
        813135600,
        828864000,
        845190000,
        860313600,
        876639600,
        891763200,
        908089200,
        923212800,
        939538800,
        954662400,
        970988400,
        972806400,
        1015138800,
        1018166400,
        1046588400,
        1049616000,
        1046415600,
        1081065600,
        1110092400,
        1112515200,
        1141542000,
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
