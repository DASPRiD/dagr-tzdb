<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Amman implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1230776624,
    ];
    public const STANDARD_OFFSETS = [
        8624,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1230776624,
        108165600,
        118270800,
        136591200,
        149806800,
        168127200,
        181342800,
        199749600,
        215643600,
        231285600,
        244501200,
        262735200,
        275950800,
        481154400,
        496962000,
        512863200,
        528584400,
        544312800,
        560034000,
        576367200,
        592088400,
        610581600,
        623538000,
        641167200,
        654987600,
        671839200,
        685918800,
        702856800,
        717886800,
        733615200,
        749941200,
        765669600,
        779576400,
        797119200,
        811634400,
        828568800,
        843084000,
        860018400,
        874533600,
        891468000,
        905983200,
        930780000,
        938642400,
        954280800,
        970092000,
        985730400,
        1001541600,
        1017266400,
        1032991200,
        1048716000,
        1066946400,
        1080770400,
        1097791200,
        1112220000,
        1127944800,
        1143669600,
        1161813600,
        1175119200,
        1193263200,
        1206568800,
        1225317600,
        1238018400,
        1256767200,
        1270072800,
        1288216800,
        1301522400,
        1319666400,
        1332972000,
        1387486800,
        1395871200,
        1414620000,
        1427320800,
        1446069600,
    ];
    public const WALL_OFFSETS = [
        8624,
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
            'dayOfMonth' => 26,
            'dayOfWeek' => 4,
            'time' => 0,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 7200,
            'offsetAfter' => 10800,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 25,
            'dayOfWeek' => 4,
            'time' => 0,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 10800,
            'offsetAfter' => 7200,
        ],
    ];
}