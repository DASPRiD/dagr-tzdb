<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Metlakatla implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3225366822,
        -2188955622,
        1446372000,
    ];
    public const STANDARD_OFFSETS = [
        54822,
        -31578,
        -28800,
        -32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3225366822,
        -2188955622,
        -883584000,
        -781714800,
        -769395600,
        -757357200,
        -31507200,
        -22086000,
        -6357600,
        9363600,
        25092000,
        40813200,
        56541600,
        72262800,
        87991200,
        104317200,
        120045600,
        135766800,
        162381600,
        167216400,
        214394400,
        230115600,
        245844000,
        261565200,
        277293600,
        293619600,
        309348000,
        325069200,
        340797600,
        356518800,
        372247200,
        387968400,
        403696800,
        419418000,
        435146400,
        436352400,
        1446372000,
        1457866800,
        1478426400,
    ];
    public const WALL_OFFSETS = [
        54822,
        -31578,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -32400,
        -28800,
        -32400,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -32400,
            'offsetBefore' => -32400,
            'offsetAfter' => -28800,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -32400,
            'offsetBefore' => -28800,
            'offsetAfter' => -32400,
        ],
    ];
}
