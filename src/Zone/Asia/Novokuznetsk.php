<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Novokuznetsk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441259328,
        -1247551200,
        670359600,
        695764800,
        1269716400,
        1301169600,
    ];
    public const STANDARD_OFFSETS = [
        20928,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441259328,
        -1247551200,
        354906000,
        370713600,
        386442000,
        402249600,
        417978000,
        433785600,
        449600400,
        467146800,
        482871600,
        498596400,
        514321200,
        530046000,
        545770800,
        561495600,
        577825200,
        593550000,
        609274800,
        624999600,
        640724400,
        656449200,
        670359600,
        671572800,
        687297600,
        695764800,
        703018800,
        718743600,
        734468400,
        750193200,
        765918000,
        781642800,
        797367600,
        813092400,
        828817200,
        847566000,
        860266800,
        879015600,
        892321200,
        910465200,
        923770800,
        941914800,
        955220400,
        973969200,
        986670000,
        1005418800,
        1018119600,
        1036868400,
        1049569200,
        1068318000,
        1081623600,
        1099767600,
        1113073200,
        1131217200,
        1144522800,
        1163271600,
        1175972400,
        1194721200,
        1207422000,
        1226170800,
        1239476400,
        1257620400,
        1269716400,
        1270324800,
        1288468800,
        1301169600,
    ];
    public const WALL_OFFSETS = [
        20928,
        21600,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        21600,
        25200,
        21600,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        28800,
        25200,
        21600,
        25200,
        21600,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
