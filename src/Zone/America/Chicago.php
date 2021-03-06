<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Chicago implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717647200,
        -1067788800,
        -1045414800,
    ];
    public const STANDARD_OFFSETS = [
        -21036,
        -21600,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717647200,
        -1636905600,
        -1618765200,
        -1605456000,
        -1587315600,
        -1563724800,
        -1551632400,
        -1538928000,
        -1520182800,
        -1504454400,
        -1491757200,
        -1473004800,
        -1459702800,
        -1441555200,
        -1428253200,
        -1410105600,
        -1396803600,
        -1378656000,
        -1365354000,
        -1347206400,
        -1333904400,
        -1315152000,
        -1301850000,
        -1283702400,
        -1270400400,
        -1252252800,
        -1238950800,
        -1220803200,
        -1207501200,
        -1189353600,
        -1176051600,
        -1157299200,
        -1144602000,
        -1125849600,
        -1112547600,
        -1094400000,
        -1081098000,
        -1067788800,
        -1045414800,
        -1032105600,
        -1018803600,
        -1000051200,
        -987354000,
        -968601600,
        -955299600,
        -937152000,
        -923850000,
        -905702400,
        -892400400,
        -880214400,
        -769626000,
        -769395600,
        -757364400,
        -748454400,
        -735152400,
        -717004800,
        -703702800,
        -684950400,
        -672253200,
        -653500800,
        -640198800,
        -622051200,
        -608749200,
        -590601600,
        -577299600,
        -559152000,
        -545850000,
        -527702400,
        -514400400,
        -495648000,
        -482950800,
        -464198400,
        -448477200,
        -432748800,
        -417027600,
        -401299200,
        -385578000,
        -369849600,
        -353523600,
        -338400000,
        -322074000,
        -306345600,
        -290624400,
        -274896000,
        -259174800,
        -243446400,
        -227725200,
        -211996800,
        -196275600,
        -180547200,
        -164221200,
        -148492800,
        -132771600,
        -117043200,
        -101322000,
        -94672800,
        -73501200,
        -57772800,
        -42051600,
        -26323200,
        -9997200,
        5126400,
        21452400,
        37180800,
        52902000,
        68630400,
        84351600,
        100080000,
        115801200,
        126691200,
        147250800,
        162374400,
        179305200,
        195033600,
        210754800,
        226483200,
        242204400,
        257932800,
        273654000,
        289382400,
        305103600,
        320832000,
        337158000,
        352281600,
        368607600,
        384336000,
        400057200,
        415785600,
        431506800,
        447235200,
        462956400,
        478684800,
        494406000,
        510134400,
        526460400,
        544608000,
        557910000,
        576057600,
        589359600,
        607507200,
        620809200,
        638956800,
        652258800,
        671011200,
        683708400,
        702460800,
        715762800,
        733910400,
        747212400,
        765360000,
        778662000,
        796809600,
        810111600,
        828864000,
        841561200,
        860313600,
        873615600,
        891763200,
        905065200,
        923212800,
        936514800,
        954662400,
        967964400,
        986112000,
        999414000,
        1018166400,
        1030863600,
        1049616000,
        1062918000,
        1081065600,
        1094367600,
        1112515200,
        1125817200,
        1143964800,
        1157266800,
        1173600000,
        1194159600,
        1205049600,
        1225609200,
    ];
    public const WALL_OFFSETS = [
        -21036,
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
