<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America\NorthDakota;

use Dagr\Tzdb\ZoneInfoInterface;

final class Center implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717643600,
        720003600,
    ];
    public const STANDARD_OFFSETS = [
        -24312,
        -25200,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717643600,
        -1638716400,
        -1619971200,
        -1607266800,
        -1588521600,
        -880210800,
        -770832000,
        -769395600,
        -74102400,
        -58374000,
        -42048000,
        -26319600,
        -10598400,
        5130000,
        20851200,
        36579600,
        52300800,
        68029200,
        83750400,
        99478800,
        115200000,
        126694800,
        147254400,
        162378000,
        178704000,
        162810000,
        210153600,
        225882000,
        241603200,
        257331600,
        273052800,
        288781200,
        304502400,
        320230800,
        336556800,
        352285200,
        368006400,
        383734800,
        399456000,
        415184400,
        430905600,
        446634000,
        462355200,
        478083600,
        494409600,
        510138000,
        525859200,
        544611600,
        557308800,
        576061200,
        588758400,
        607510800,
        620208000,
        638960400,
        651657600,
        671014800,
        683712000,
        702464400,
        715161600,
        720003600,
        733910400,
        746002800,
        765360000,
        777452400,
        796809600,
        808902000,
        828864000,
        840956400,
        860313600,
        872406000,
        891763200,
        903855600,
        923212800,
        935305200,
        954662400,
        966754800,
        986112000,
        998809200,
        1018166400,
        1030258800,
        1049616000,
        1061708400,
        1081065600,
        1093158000,
        1112515200,
        1124607600,
        1143964800,
        1156057200,
        1173600000,
        1194159600,
        1205049600,
        1225609200,
    ];
    public const WALL_OFFSETS = [
        -24312,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
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