<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Gaza implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2185409872,
    ];
    public const STANDARD_OFFSETS = [
        8272,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2185409872,
        -933645600,
        -857358000,
        -844300800,
        -825822000,
        -812685600,
        -794199600,
        -779853600,
        -762656400,
        -748310400,
        -731127600,
        -399088800,
        -386650800,
        -368330400,
        -355114800,
        -336790800,
        -323654400,
        -305168400,
        -292032000,
        -273632400,
        -260496000,
        -242096400,
        -228960000,
        -210560400,
        -197424000,
        -178938000,
        -165801600,
        -147402000,
        -134265600,
        -115866000,
        -102643200,
        -84330000,
        -81313200,
        142380000,
        150843600,
        167176800,
        178664400,
        482277600,
        495579600,
        516751200,
        526424400,
        545436000,
        558478800,
        576626400,
        589323600,
        609890400,
        620773200,
        638316000,
        651618000,
        669765600,
        683672400,
        701820000,
        715726800,
        733701600,
        747176400,
        765151200,
        778021200,
        796600800,
        810075600,
        828568800,
        843084000,
        860018400,
        874533600,
        891468000,
        905983200,
        924127200,
        940453200,
        956181600,
        971902800,
        987631200,
        1003352400,
        1019080800,
        1034802000,
        1050530400,
        1066251600,
        1081980000,
        1096581600,
        1114034400,
        1128380400,
        1143842400,
        1158872400,
        1175378400,
        1189551600,
        1206568800,
        1219957200,
        1237413600,
        1251928800,
        1269640860,
        1281474000,
        1301608860,
        1312146000,
        1331157600,
        1348178400,
        1363212000,
        1380142800,
        1394661600,
        1414011600,
        1426197600,
        1445461200,
        1457564400,
        1476309600,
        1489014000,
        1507759200,
    ];
    public const WALL_OFFSETS = [
        8272,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 7,
            'dayOfWeek' => 4,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 7200,
            'offsetAfter' => 10800,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 7,
            'dayOfWeek' => 4,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 10800,
            'offsetAfter' => 7200,
        ],
    ];
}
