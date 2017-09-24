<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Halifax implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2131645536,
    ];
    public const STANDARD_OFFSETS = [
        -15264,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2131645536,
        -1696276800,
        -1680469200,
        -1632074400,
        -1615143600,
        -1566763200,
        -1557090000,
        -1535486400,
        -1524949200,
        -1504468800,
        -1493413200,
        -1472414400,
        -1461963600,
        -1440964800,
        -1429390800,
        -1409515200,
        -1396731600,
        -1376856000,
        -1366491600,
        -1346616000,
        -1333832400,
        -1313956800,
        -1303678800,
        -1282507200,
        -1272661200,
        -1251057600,
        -1240088400,
        -1219608000,
        -1207429200,
        -1188763200,
        -1175979600,
        -1157313600,
        -1143925200,
        -1124049600,
        -1113771600,
        -1091390400,
        -1081026000,
        -1059854400,
        -1050786000,
        -1030910400,
        -1018126800,
        -999460800,
        -986677200,
        -965592000,
        -955227600,
        -935956800,
        -923173200,
        -904507200,
        -891723600,
        -880221600,
        -765399600,
        -748461600,
        -735159600,
        -717012000,
        -703710000,
        -684957600,
        -672260400,
        -653508000,
        -640206000,
        -590608800,
        -577306800,
        -559159200,
        -545857200,
        -527709600,
        -514407600,
        -495655200,
        -482958000,
        -432756000,
        -419454000,
        -401306400,
        -388004400,
        -369856800,
        -356554800,
        -338407200,
        -325105200,
        -243453600,
        -227732400,
        -212004000,
        -196282800,
        -180554400,
        -164228400,
        -148500000,
        -132778800,
        -117050400,
        -101329200,
        -85600800,
        -69879600,
        -54151200,
        -38430000,
        -22701600,
        -6375600,
        8748000,
        25074000,
        40802400,
        56523600,
        72252000,
        87973200,
        103701600,
        119422800,
        132127200,
        147848400,
        163576800,
        179298000,
        195026400,
        211352400,
        227080800,
        242802000,
        258530400,
        274251600,
        289980000,
        305701200,
        321429600,
        337150800,
        352879200,
        369205200,
        384328800,
        400654800,
        416383200,
        432104400,
        447832800,
        463554000,
        479282400,
        495003600,
        510732000,
        526453200,
        544600800,
        558507600,
        576050400,
        589957200,
        607500000,
        621406800,
        638949600,
        652856400,
        671004000,
        684306000,
        702453600,
        716360400,
        733903200,
        747810000,
        765352800,
        779259600,
        796802400,
        810709200,
        828856800,
        842158800,
        860306400,
        873608400,
        891756000,
        905662800,
        923205600,
        937112400,
        954655200,
        968562000,
        986104800,
        1000011600,
        1018159200,
        1031461200,
        1049608800,
        1062910800,
        1081058400,
        1094965200,
        1112508000,
        1126414800,
        1143957600,
        1157864400,
        1173592800,
        1194152400,
        1205042400,
        1225602000,
    ];
    public const WALL_OFFSETS = [
        -15264,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -14400,
            'offsetBefore' => -14400,
            'offsetAfter' => -10800,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -14400,
            'offsetBefore' => -10800,
            'offsetAfter' => -14400,
        ],
    ];
}
