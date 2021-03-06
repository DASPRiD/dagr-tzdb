<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class London implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3852662325,
        -37242000,
        57722400,
    ];
    public const STANDARD_OFFSETS = [
        -75,
        0,
        3600,
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3852662325,
        -1691964000,
        -1680472800,
        -1664143200,
        -1650146400,
        -1633903200,
        -1617487200,
        -1601848800,
        -1586037600,
        -1570399200,
        -1552168800,
        -1538344800,
        -1522533600,
        -1507500000,
        -1490565600,
        -1473631200,
        -1460930400,
        -1442786400,
        -1428876000,
        -1410732000,
        -1396216800,
        -1379282400,
        -1364767200,
        -1348437600,
        -1333317600,
        -1315778400,
        -1301263200,
        -1284328800,
        -1269813600,
        -1253484000,
        -1238364000,
        -1221429600,
        -1206914400,
        -1189980000,
        -1175464800,
        -1159135200,
        -1143410400,
        -1126476000,
        -1111960800,
        -1095631200,
        -1080511200,
        -1063576800,
        -1049061600,
        -1032127200,
        -1017612000,
        -1001282400,
        -986162400,
        -969228000,
        -950479200,
        -942012000,
        -904518000,
        -896050800,
        -875487600,
        -864601200,
        -844038000,
        -832546800,
        -812588400,
        -798073200,
        -781052400,
        -772066800,
        -764805600,
        -748476000,
        -733356000,
        -719445600,
        -717030000,
        -706748400,
        -699487200,
        -687996000,
        -668037600,
        -654732000,
        -636588000,
        -622072800,
        -605743200,
        -590623200,
        -574293600,
        -558568800,
        -542239200,
        -527119200,
        -512604000,
        -496274400,
        -481154400,
        -464220000,
        -449704800,
        -432165600,
        -417650400,
        -401320800,
        -386200800,
        -369266400,
        -354751200,
        -337816800,
        -323301600,
        -306972000,
        -291852000,
        -276732000,
        -257983200,
        -245282400,
        -226533600,
        -213228000,
        -195084000,
        -182383200,
        -163634400,
        -150933600,
        -132184800,
        -119484000,
        -100735200,
        -88034400,
        -68680800,
        -59004000,
        57722400,
        69818400,
        89172000,
        101268000,
        120621600,
        132717600,
        152071200,
        164167200,
        183520800,
        196221600,
        214970400,
        227671200,
        246420000,
        259120800,
        278474400,
        290570400,
        309924000,
        322020000,
        341373600,
        354070800,
        372819600,
        385520400,
        404269200,
        416970000,
        435718800,
        449024400,
        467773200,
        480474000,
        499222800,
        511923600,
        530672400,
        543373200,
        562122000,
        574822800,
        593571600,
        606272400,
        625626000,
        638326800,
        657075600,
        669776400,
        688525200,
        701226000,
        719974800,
        732675600,
        751424400,
        764125200,
        782874000,
        795574800,
        814323600,
        828234000,
        846378000,
        859683600,
        877827600,
    ];
    public const WALL_OFFSETS = [
        -75,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
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
        0,
        3600,
        0,
        3600,
        7200,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 0,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 25,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 3600,
            'offsetAfter' => 0,
        ],
    ];
}
