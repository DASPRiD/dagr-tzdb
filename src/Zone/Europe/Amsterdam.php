<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Amsterdam implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1025745572,
        -935022000,
    ];
    public const STANDARD_OFFSETS = [
        1172,
        1200,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1693700372,
        -1680484772,
        -1663453172,
        -1650147572,
        -1633213172,
        -1617488372,
        -1601158772,
        -1586038772,
        -1569709172,
        -1554589172,
        -1538259572,
        -1523139572,
        -1507501172,
        -1490566772,
        -1469657972,
        -1459117172,
        -1443997172,
        -1427667572,
        -1406758772,
        -1396217972,
        -1376950772,
        -1364768372,
        -1345414772,
        -1333318772,
        -1313792372,
        -1301264372,
        -1282256372,
        -1269814772,
        -1250720372,
        -1238365172,
        -1219184372,
        -1206915572,
        -1186957172,
        -1175465972,
        -1156025972,
        -1143411572,
        -1124489972,
        -1111961972,
        -1092953972,
        -1080512372,
        -1061331572,
        -1049062772,
        -1029190772,
        -1025745572,
        -1017613200,
        -998259600,
        -986163600,
        -966723600,
        -954109200,
        -935022000,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -796777200,
        -781052400,
        -766623600,
        228877200,
        276051600,
        291776400,
        322621200,
        323830800,
        354070800,
        370400400,
        386125200,
        401850000,
        417574800,
        433299600,
        449024400,
        464749200,
        480474000,
        496198800,
        511923600,
        527648400,
        543373200,
        559702800,
        575427600,
        591152400,
        606877200,
        622602000,
        638326800,
        654051600,
        669776400,
        685501200,
        701226000,
        717555600,
        733280400,
        749005200,
        764730000,
        780454800,
        796179600,
        811904400,
        830653200,
        843354000,
        862102800,
        874803600,
    ];
    public const WALL_OFFSETS = [
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        1172,
        4772,
        4800,
        1200,
        4800,
        1200,
        4800,
        1200,
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
            'month' => 4,
            'dayOfMonth' => 22,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 7200,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 9,
            'dayOfMonth' => 21,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 3600,
            'offsetBefore' => 3600,
            'offsetAfter' => 7200,
        ],
    ];
}