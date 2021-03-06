<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Ulyanovsk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1593820800,
        -1247540400,
        606866400,
        670374000,
        695779200,
        1301180400,
        1414274400,
        1459033200,
    ];
    public const STANDARD_OFFSETS = [
        11616,
        10800,
        14400,
        10800,
        7200,
        10800,
        14400,
        10800,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1593820800,
        -1247540400,
        354916800,
        370724400,
        386452800,
        402260400,
        417988800,
        433796400,
        449611200,
        478648800,
        494373600,
        510098400,
        525823200,
        541548000,
        557272800,
        572997600,
        588722400,
        605052000,
        606866400,
        620175600,
        635900400,
        651625200,
        667350000,
        670374000,
        682473600,
        695779200,
        697590000,
        713919600,
        729644400,
        745369200,
        761094000,
        776818800,
        792543600,
        808268400,
        827017200,
        839718000,
        858466800,
        871167600,
        889916400,
        903222000,
        921366000,
        934671600,
        952815600,
        966121200,
        984265200,
        997570800,
        1016319600,
        1029020400,
        1047769200,
        1060470000,
        1079218800,
        1092524400,
        1110668400,
        1123974000,
        1142118000,
        1155423600,
        1173567600,
        1186873200,
        1205622000,
        1218322800,
        1237071600,
        1250377200,
        1268521200,
        1281826800,
        1414274400,
        1459033200,
    ];
    public const WALL_OFFSETS = [
        11616,
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
