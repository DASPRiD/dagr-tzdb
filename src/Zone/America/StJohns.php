<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class StJohns implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1096921748,
    ];
    public const STANDARD_OFFSETS = [
        -12652,
        -12600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1664130548,
        -1650137348,
        -1632076148,
        -1615145348,
        -1598650148,
        -1590100148,
        -1567286948,
        -1552170548,
        -1535837348,
        -1520720948,
        -1503782948,
        -1489271348,
        -1472333348,
        -1457821748,
        -1440883748,
        -1426372148,
        -1409434148,
        -1394317748,
        -1377984548,
        -1362868148,
        -1346534948,
        -1331418548,
        -1314480548,
        -1299968948,
        -1283030948,
        -1268519348,
        -1251581348,
        -1237069748,
        -1220131748,
        -1205015348,
        -1188682148,
        -1173565748,
        -1156627748,
        -1142116148,
        -1125178148,
        -1110666548,
        -1096921748,
        -1093728600,
        -1079821800,
        -1061670600,
        -1048973400,
        -1030221000,
        -1017523800,
        -998771400,
        -986074200,
        -966717000,
        -954624600,
        -935267400,
        -922570200,
        -903817800,
        -891120600,
        -872368200,
        -765401400,
        -746044200,
        -733347000,
        -714594600,
        -701897400,
        -683145000,
        -670447800,
        -651695400,
        -638998200,
        -619641000,
        -606943800,
        -591215400,
        -577913400,
        -559765800,
        -546463800,
        -527711400,
        -515014200,
        -496261800,
        -482959800,
        -464812200,
        -451510200,
        -433362600,
        -420060600,
        -401913000,
        -388611000,
        -370463400,
        -357161400,
        -338409000,
        -325711800,
        -306959400,
        -291238200,
        -275509800,
        -259788600,
        -244060200,
        -228339000,
        -212610600,
        -196284600,
        -180556200,
        -164835000,
        -149106600,
        -133385400,
        -117657000,
        -101935800,
        -86207400,
        -70486200,
        -54757800,
        -38431800,
        -23308200,
        -6982200,
        8746200,
        24467400,
        40195800,
        55917000,
        71645400,
        87366600,
        103095000,
        118816200,
        134544600,
        150870600,
        165994200,
        182320200,
        198048600,
        213769800,
        229498200,
        245219400,
        260947800,
        276669000,
        292397400,
        308118600,
        323847000,
        340173000,
        355901400,
        371622600,
        387351000,
        403072200,
        418800600,
        434521800,
        450250200,
        465971400,
        481699800,
        498025800,
        513149400,
        529475400,
        544591860,
        560917860,
        576041460,
        592363860,
        607491060,
        623817060,
        638940660,
        655266660,
        670995060,
        687321060,
        702444660,
        718770660,
        733894260,
        750220260,
        765343860,
        781669860,
        796793460,
        813119460,
        828847860,
        845173860,
        860297460,
        876623460,
        891747060,
        908073060,
        923196660,
        939522660,
        954646260,
        970972260,
        986095860,
        1002421860,
        1018150260,
        1034476260,
        1049599860,
        1065925860,
        1081049460,
        1097375460,
        1112499060,
        1128825060,
        1143948660,
        1160274660,
        1173583860,
        1194143460,
        1205033460,
        1225593060,
        1236483060,
        1257042660,
        1268537460,
        1289097060,
        1299987060,
        1320553800,
        1331443800,
        1352003400,
    ];
    public const WALL_OFFSETS = [
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -9052,
        -12652,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -5400,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
        -9000,
        -12600,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -12600,
            'offsetBefore' => -12600,
            'offsetAfter' => -9000,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -12600,
            'offsetBefore' => -9000,
            'offsetAfter' => -12600,
        ],
    ];
}
