<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Boise implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717640000,
        -1471788000,
    ];
    public const STANDARD_OFFSETS = [
        -27889,
        -28800,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717640000,
        -1629036000,
        -1610290800,
        -1597586400,
        -1578841200,
        -1471788000,
        -880210800,
        -761760000,
        -80751600,
        -64425600,
        -48697200,
        -32976000,
        -17247600,
        -1526400,
        14202000,
        29923200,
        45651600,
        61372800,
        77101200,
        93427200,
        109155600,
        124876800,
        129114000,
        155721600,
        162378000,
        187171200,
        202899600,
        219225600,
        234349200,
        250675200,
        266403600,
        282124800,
        297853200,
        313574400,
        329302800,
        345024000,
        360752400,
        376473600,
        392202000,
        408528000,
        423651600,
        439977600,
        455706000,
        471427200,
        487155600,
        502876800,
        518605200,
        534326400,
        544611600,
        565776000,
        576061200,
        597830400,
        607510800,
        629280000,
        638960400,
        660729600,
        671014800,
        692179200,
        702464400,
        723628800,
        733914000,
        755683200,
        765363600,
        787132800,
        796813200,
        818582400,
        828867600,
        850032000,
        860317200,
        881481600,
        891766800,
        912931200,
        923216400,
        944985600,
        954666000,
        976435200,
        986115600,
        1007884800,
        1018170000,
        1039334400,
        1049619600,
        1070784000,
        1081069200,
        1102838400,
        1112518800,
        1134288000,
        1143968400,
        1165737600,
        1173603600,
        1194163200,
        1205053200,
        1225612800,
    ];
    public const WALL_OFFSETS = [
        -27889,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -25200,
            'offsetAfter' => -21600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -21600,
            'offsetAfter' => -25200,
        ],
    ];
}
