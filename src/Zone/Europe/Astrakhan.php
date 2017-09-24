<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Astrakhan implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441249932,
        -1247540400,
        606866400,
        670374000,
        701820000,
        1301180400,
        1414274400,
        1459033200,
    ];
    public const STANDARD_OFFSETS = [
        11532,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441249932,
        -1247540400,
        354916800,
        370724400,
        386452800,
        402260400,
        417988800,
        433796400,
        449611200,
        455666400,
        502840800,
        518565600,
        534895200,
        550620000,
        566344800,
        582069600,
        597794400,
        606866400,
        612918000,
        628642800,
        644367600,
        660092400,
        707266800,
        722991600,
        738716400,
        754441200,
        770166000,
        785890800,
        801615600,
        817340400,
        836089200,
        849394800,
        867538800,
        880844400,
        898988400,
        912294000,
        930438000,
        943743600,
        962492400,
        975193200,
        993942000,
        1007247600,
        1025391600,
        1038697200,
        1056841200,
        1070146800,
        1088290800,
        1101596400,
        1120345200,
        1133046000,
        1151794800,
        1164495600,
        1183244400,
        1196550000,
        1214694000,
        1227999600,
        1246143600,
        1259449200,
        1277593200,
        1290898800,
        1414274400,
        1459033200,
    ];
    public const WALL_OFFSETS = [
        11532,
        10800,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
        14400,
        18000,
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
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
    ];
    public const LAST_RULES = [
    ];
}
