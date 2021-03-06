<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Macquarie implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2214259200,
        -1601719200,
        -687052800,
        1270310400,
    ];
    public const STANDARD_OFFSETS = [
        0,
        36000,
        0,
        36000,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2214259200,
        -1680508800,
        -1665392400,
        -1601719200,
        -687052800,
        -71136000,
        -56620800,
        -38476800,
        -25776000,
        -6422400,
        5673600,
        25027200,
        37728000,
        56476800,
        66758400,
        87926400,
        100022400,
        119376000,
        131472000,
        150825600,
        162921600,
        182880000,
        194976000,
        214329600,
        226425600,
        245779200,
        257875200,
        277228800,
        289324800,
        308678400,
        320774400,
        340732800,
        352224000,
        372182400,
        384883200,
        403632000,
        416332800,
        435081600,
        447177600,
        466531200,
        478627200,
        497980800,
        510076800,
        530035200,
        542736000,
        562089600,
        574790400,
        592934400,
        606240000,
        624384000,
        637689600,
        655833600,
        669139200,
        686678400,
        700588800,
        718128000,
        732038400,
        749577600,
        763488000,
        781027200,
        795542400,
        812476800,
        826992000,
        844531200,
        858441600,
        875980800,
        889891200,
        907430400,
        921340800,
        938880000,
        953395200,
        966096000,
        984844800,
        1002384000,
        1016294400,
        1033833600,
        1047744000,
        1065283200,
        1079193600,
        1096732800,
        1110643200,
        1128182400,
        1143907200,
        1159632000,
        1174147200,
        1191686400,
        1207411200,
        1223136000,
        1238860800,
        1254585600,
    ];
    public const WALL_OFFSETS = [
        0,
        36000,
        39600,
        36000,
        0,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
