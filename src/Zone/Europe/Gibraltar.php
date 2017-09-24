<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Gibraltar implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2821649916,
        -401320800,
    ];
    public const STANDARD_OFFSETS = [
        -1284,
        0,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2821649916,
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
        378687600,
        391568400,
        407293200,
        423018000,
        438742800,
        454467600,
        470797200,
        486522000,
        502246800,
        517971600,
        533696400,
        549421200,
        565146000,
        580870800,
        596595600,
        612320400,
        628045200,
        643770000,
        660099600,
        675824400,
        691549200,
        707274000,
        722998800,
        738723600,
        754448400,
        770173200,
        785898000,
        801622800,
        817347600,
        836096400,
        849402000,
        867546000,
        880851600,
    ];
    public const WALL_OFFSETS = [
        -1284,
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
        7200,
        3600,
        7200,
    ];
    public const LAST_RULES = [
        [
            'month' => 6,
            'dayOfMonth' => 27,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 26,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}