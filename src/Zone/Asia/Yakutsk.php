<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Yakutsk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1579423138,
        -1247558400,
        670352400,
        695757600,
        1301158800,
        1414252800,
    ];
    public const STANDARD_OFFSETS = [
        31138,
        28800,
        32400,
        28800,
        32400,
        36000,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1579423138,
        -1247558400,
        354898800,
        370706400,
        386434800,
        402242400,
        417970800,
        433778400,
        449593200,
        460486800,
        476211600,
        491936400,
        507661200,
        523386000,
        539110800,
        554835600,
        570560400,
        586890000,
        602614800,
        618339600,
        634064400,
        649789200,
        665514000,
        670352400,
        680637600,
        695757600,
        712083600,
        727808400,
        743533200,
        759258000,
        774982800,
        790707600,
        806432400,
        822157200,
        840906000,
        853606800,
        872355600,
        885661200,
        903805200,
        917110800,
        935254800,
        948560400,
        966704400,
        980010000,
        998758800,
        1011459600,
        1030208400,
        1042909200,
        1061658000,
        1074963600,
        1093107600,
        1106413200,
        1124557200,
        1137862800,
        1156006800,
        1169312400,
        1188061200,
        1200762000,
        1219510800,
        1232816400,
        1250960400,
        1264266000,
        1282410000,
        1301158800,
        1414252800,
    ];
    public const WALL_OFFSETS = [
        31138,
        28800,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        28800,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
