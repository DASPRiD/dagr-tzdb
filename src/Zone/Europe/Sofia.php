<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Sofia implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840146396,
        -2369527016,
        -857257200,
        -781048800,
    ];
    public const STANDARD_OFFSETS = [
        5596,
        7016,
        7200,
        3600,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840146396,
        -2369527016,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -796777200,
        -781048800,
        291762000,
        307576800,
        323643600,
        339026400,
        355093200,
        370393200,
        386542800,
        401846400,
        413337600,
        429062400,
        445392000,
        461116800,
        476841600,
        492566400,
        508291200,
        524016000,
        539740800,
        555465600,
        571190400,
        586915200,
        603244800,
        618969600,
        634694400,
        650419200,
        670370400,
        686091600,
        701820000,
        717541200,
        733269600,
        748990800,
        764719200,
        780440400,
        796168800,
        811890000,
        828223200,
        846363600,
        855450000,
        873594000,
        886899600,
        905648400,
    ];
    public const WALL_OFFSETS = [
        5596,
        7016,
        7200,
        3600,
        7200,
        3600,
        7200,
        3600,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
    ];
    public const LAST_RULES = [
        [
            'month' => 2,
            'dayOfMonth' => 6,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 7200,
            'offsetAfter' => 10800,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 7,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 10800,
            'offsetAfter' => 7200,
        ],
    ];
}
