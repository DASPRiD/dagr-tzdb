<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone;

use Dagr\Tzdb\ZoneInfoInterface;

final class CET implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
    ];
    public const STANDARD_OFFSETS = [
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1693706400,
        -1680483600,
        -1663455600,
        -1650150000,
        -1632006000,
        -1618700400,
        -938905200,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -796777200,
        -781052400,
        -766623600,
        228877200,
        243997200,
        260326800,
        276051600,
        291776400,
        307501200,
        323830800,
        338950800,
        354675600,
        370400400,
        386125200,
        401850000,
        417574800,
        433299600,
        449024400,
        465354000,
        481078800,
        496803600,
        512528400,
        528253200,
        543978000,
        559702800,
        575427600,
        591152400,
        606877200,
        622602000,
        638326800,
        654656400,
        670381200,
        686106000,
        701830800,
        717555600,
        733280400,
        749005200,
        764730000,
        780454800,
        796179600,
        811904400,
        828234000,
        846378000,
        859683600,
        877827600,
    ];
    public const WALL_OFFSETS = [
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
        7200,
        3600,
        7200,
        3600,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
    ];
}
