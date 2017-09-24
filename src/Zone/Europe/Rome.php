<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Rome implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2403565200,
    ];
    public const STANDARD_OFFSETS = [
        2996,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2403565200,
        -1690765200,
        -1680487200,
        -1664758800,
        -1648951200,
        -1635123600,
        -1616896800,
        -1604278800,
        -1585533600,
        -1571014800,
        -1555293600,
        -932432400,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -798073200,
        -781052400,
        -766717200,
        -750898800,
        -733359600,
        -719456400,
        -701917200,
        -689209200,
        -670460400,
        -114051600,
        -103168800,
        -81997200,
        -71715600,
        -50547600,
        -40266000,
        -18493200,
        -8211600,
        12956400,
        22633200,
        43801200,
        54082800,
        75855600,
        86742000,
        107910000,
        117586800,
        138754800,
        149036400,
        170809200,
        180486000,
        202258800,
        211935600,
        233103600,
        243385200,
        265158000,
        276044400,
        296607600,
        307494000,
        323830800,
        326854800,
        374029200,
        389754000,
        406083600,
        421808400,
        437533200,
        453258000,
        468982800,
        484707600,
        500432400,
        516157200,
        531882000,
        547606800,
        563331600,
        579661200,
        595386000,
        611110800,
        626835600,
        642560400,
        658285200,
        674010000,
        689734800,
        705459600,
        721184400,
        736909200,
        753238800,
        768963600,
        784688400,
        800413200,
        816138000,
        834282000,
        847587600,
        866336400,
        879037200,
    ];
    public const WALL_OFFSETS = [
        2996,
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
    ];
    public const LAST_RULES = [
        [
            'month' => 6,
            'dayOfMonth' => 9,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}
