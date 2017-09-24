<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tomsk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1578807591,
        -1247551200,
        670359600,
        695764800,
        1020196800,
        1301169600,
        1414263600,
        1464465600,
    ];
    public const STANDARD_OFFSETS = [
        20391,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1578807591,
        -1247551200,
        354906000,
        370713600,
        386442000,
        402249600,
        417978000,
        433785600,
        449600400,
        468961200,
        484686000,
        501015600,
        516740400,
        532465200,
        548190000,
        563914800,
        579639600,
        595364400,
        611089200,
        626814000,
        642538800,
        658263600,
        670359600,
        673992000,
        689716800,
        695764800,
        704833200,
        720558000,
        736282800,
        752007600,
        767732400,
        783457200,
        799182000,
        815511600,
        831236400,
        849380400,
        862686000,
        880830000,
        894135600,
        912884400,
        925585200,
        944334000,
        957034800,
        975783600,
        989089200,
        1007233200,
        1038081600,
        1051387200,
        1070136000,
        1082836800,
        1101585600,
        1114286400,
        1133035200,
        1146340800,
        1164484800,
        1177790400,
        1195934400,
        1209240000,
        1227988800,
        1240689600,
        1259438400,
        1272139200,
        1290888000,
        1301169600,
        1414263600,
        1464465600,
    ];
    public const WALL_OFFSETS = [
        20391,
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
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
