<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Simferopol implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840148984,
        -1441160160,
        -1247536800,
        -888894000,
        -811648800,
        646786800,
        767739600,
        859770000,
        1396137600,
        1414274400,
    ];
    public const STANDARD_OFFSETS = [
        8184,
        8160,
        7200,
        10800,
        3600,
        10800,
        7200,
        10800,
        7200,
        14400,
        10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840148984,
        -1441160160,
        -1247536800,
        -888894000,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -811648800,
        354920400,
        370728000,
        386456400,
        402264000,
        417992400,
        433800000,
        449614800,
        456879600,
        504054000,
        519778800,
        535503600,
        551228400,
        566953200,
        583282800,
        599007600,
        614732400,
        630457200,
        631137600,
        646786800,
        700005600,
        715726800,
        731455200,
        747781200,
        763509600,
        767739600,
        778622400,
        794350800,
        810072000,
        825800400,
        846374400,
        850604400,
        852062400,
        859770000,
        870570000,
        888714000,
        902019600,
        920163600,
        933469200,
        952218000,
        964918800,
        983667600,
        996368400,
        1015117200,
        1028422800,
        1046566800,
        1059872400,
        1046394000,
        1091322000,
        1110070800,
        1122771600,
        1141520400,
        1154221200,
        1172970000,
        1185670800,
        1204419600,
        1217725200,
        1235869200,
        1249174800,
        1267318800,
        1280624400,
        1299373200,
        1312074000,
        1330822800,
        1343523600,
        1362272400,
        1375578000,
        1393722000,
        1396137600,
        1414274400,
    ];
    public const WALL_OFFSETS = [
        8184,
        8160,
        7200,
        10800,
        7200,
        3600,
        7200,
        3600,
        7200,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
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
        14400,
        10800,
    ];
    public const LAST_RULES = [
    ];
}
