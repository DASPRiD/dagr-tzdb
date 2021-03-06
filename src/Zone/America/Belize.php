<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Belize implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1822500432,
    ];
    public const STANDARD_OFFSETS = [
        -21168,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1822500432,
        -1616954400,
        -1606069800,
        -1585504800,
        -1574015400,
        -1554055200,
        -1542565800,
        -1522605600,
        -1511116200,
        -1490551200,
        -1479666600,
        -1459101600,
        -1448217000,
        -1427652000,
        -1416162600,
        -1396202400,
        -1384713000,
        -1364752800,
        -1353263400,
        -1333303200,
        -1321813800,
        -1301248800,
        -1290364200,
        -1269799200,
        -1258914600,
        -1238349600,
        -1226860200,
        -1206900000,
        -1195410600,
        -1175450400,
        -1163961000,
        -1143396000,
        -1132511400,
        -1111946400,
        -1101061800,
        -1080496800,
        -1069612200,
        -1049047200,
        -1037557800,
        -1017597600,
        -1006108200,
        -986148000,
        -974658600,
        -954093600,
        -943209000,
        -922644000,
        -911759400,
        -891194400,
        -879705000,
        -859744800,
        -848255400,
        123919200,
        129618000,
        409039200,
        413874000,
    ];
    public const WALL_OFFSETS = [
        -21168,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -19800,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
