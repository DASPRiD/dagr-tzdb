<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Easter implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1178124152,
        384922800,
    ];
    public const STANDARD_OFFSETS = [
        -26248,
        -25200,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1178124152,
        -36619200,
        -23922000,
        -3355200,
        7527600,
        24465600,
        37767600,
        55915200,
        69217200,
        87969600,
        100666800,
        118209600,
        132116400,
        150868800,
        163566000,
        182318400,
        195620400,
        213768000,
        227070000,
        245217600,
        258519600,
        277272000,
        289969200,
        308721600,
        321418800,
        340171200,
        353473200,
        371620800,
        403070400,
        416372400,
        434520000,
        447822000,
        466574400,
        479271600,
        498024000,
        510721200,
        529473600,
        545194800,
        560923200,
        574225200,
        592372800,
        605674800,
        624427200,
        637124400,
        653457600,
        668574000,
        687326400,
        700628400,
        718776000,
        732078000,
        750225600,
        763527600,
        781675200,
        794977200,
        813729600,
        826426800,
        845179200,
        859690800,
        876628800,
        889930800,
        906868800,
        923194800,
        939528000,
        952830000,
        971582400,
        984279600,
        1003032000,
        1015729200,
        1034481600,
        1047178800,
        1065931200,
        1079233200,
        1097380800,
        1110682800,
        1128830400,
        1142132400,
        1160884800,
        1173582000,
        1192334400,
        1206846000,
        1223784000,
        1237086000,
        1255233600,
        1270350000,
        1286683200,
        1304823600,
        1313899200,
        1335668400,
        1346558400,
        1367118000,
        1378612800,
        1398567600,
        1410062400,
        1463281200,
        1471147200,
        1494730800,
        1502596800,
    ];
    public const WALL_OFFSETS = [
        -26248,
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
    ];
    public const LAST_RULES = [
        [
            'month' => 5,
            'dayOfMonth' => 9,
            'dayOfWeek' => 0,
            'time' => 10800,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -18000,
            'offsetAfter' => -21600,
        ],
        [
            'month' => 8,
            'dayOfMonth' => 9,
            'dayOfWeek' => 0,
            'time' => 14400,
            'timeEndOfDay' => false,
            'standardOffset' => -21600,
            'offsetBefore' => -21600,
            'offsetAfter' => -18000,
        ],
    ];
}