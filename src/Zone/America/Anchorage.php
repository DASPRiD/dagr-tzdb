<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Anchorage implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3225362424,
        -2188951224,
        436359600,
    ];
    public const STANDARD_OFFSETS = [
        50424,
        -35976,
        -36000,
        -32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3225362424,
        -2188951224,
        -883576800,
        -784731600,
        -769395600,
        -88002000,
        -31500000,
        -25102800,
        -9374400,
        6346800,
        22075200,
        37796400,
        53524800,
        69246000,
        84974400,
        100695600,
        116424000,
        132750000,
        162388800,
        164199600,
        211377600,
        227098800,
        242827200,
        258548400,
        274276800,
        289998000,
        305726400,
        322052400,
        337780800,
        353502000,
        369230400,
        384951600,
        400680000,
        416401200,
        432129600,
        436359600,
        447242400,
        462970800,
        478692000,
        494420400,
        510141600,
        525870000,
        541591200,
        544618800,
        573040800,
        576068400,
        605095200,
        607518000,
        636544800,
        638967600,
        667994400,
        671022000,
        699444000,
        702471600,
        730893600,
        733921200,
        762948000,
        765370800,
        794397600,
        796820400,
        825847200,
        828874800,
        857296800,
        860324400,
        888746400,
        891774000,
        920196000,
        923223600,
        952250400,
        954673200,
        983700000,
        986122800,
        1015149600,
        1018177200,
        1046599200,
        1049626800,
        1046426400,
        1081076400,
        1110103200,
        1112526000,
        1141552800,
        1143975600,
        1194170400,
        1205060400,
        1225620000,
    ];
    public const WALL_OFFSETS = [
        50424,
        -35976,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
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
