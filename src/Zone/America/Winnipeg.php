<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Winnipeg implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2602258284,
    ];
    public const STANDARD_OFFSETS = [
        -23316,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2602258284,
        -1694368800,
        -1681671600,
        -1632067200,
        -1615136400,
        -1029686400,
        -1018198800,
        -880214400,
        -765392400,
        -746035200,
        -732733200,
        -715795200,
        -702493200,
        -684345600,
        -671043600,
        -652896000,
        -639594000,
        -620755200,
        -607626000,
        -589392000,
        -576090000,
        -557942400,
        -544640400,
        -526492800,
        -513190800,
        -495043200,
        -481741200,
        -463593600,
        -450291600,
        -431539200,
        -418237200,
        -400089600,
        -386787600,
        -368640000,
        -355338000,
        -337190400,
        -321469200,
        -305740800,
        -292438800,
        -210787200,
        -198090000,
        -116438400,
        -100108800,
        -84384000,
        -68659200,
        -52934400,
        -37209600,
        -21484800,
        -5760000,
        9964800,
        25689600,
        41414400,
        57744000,
        73468800,
        89193600,
        104918400,
        120643200,
        136368000,
        152092800,
        167817600,
        183542400,
        199267200,
        215596800,
        230716800,
        247046400,
        262771200,
        278496000,
        294220800,
        309945600,
        325670400,
        341395200,
        357120000,
        372844800,
        388569600,
        404899200,
        420019200,
        436348800,
        452073600,
        467798400,
        483523200,
        499248000,
        514972800,
        530697600,
        544608000,
        562147200,
        576057600,
        594201600,
        607507200,
        625651200,
        638956800,
        657100800,
        671011200,
        688550400,
        702460800,
        720000000,
        733910400,
        752054400,
        765360000,
        783504000,
        796809600,
        814953600,
        828864000,
        846403200,
        860313600,
        877852800,
        891763200,
        909302400,
        923212800,
        941356800,
        954662400,
        972806400,
        986112000,
        1004256000,
        1018166400,
        1035705600,
        1049616000,
        1067155200,
        1081065600,
        1099209600,
        1112515200,
        1130659200,
        1143964800,
        1148194800,
        1173600000,
        1194159600,
        1205049600,
        1225609200,
    ];
    public const WALL_OFFSETS = [
        -23316,
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
