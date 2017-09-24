<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America\Kentucky;

use Dagr\Tzdb\ZoneInfoInterface;

final class Monticello implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717647200,
        972806400,
    ];
    public const STANDARD_OFFSETS = [
        -20364,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717647200,
        -1615737600,
        -1597597200,
        -1584288000,
        -779907600,
        -769395600,
        -757364400,
        -63136800,
        -51728400,
        -36000000,
        -20278800,
        -4550400,
        11170800,
        26899200,
        43225200,
        58953600,
        74674800,
        90403200,
        106124400,
        121852800,
        137574000,
        162374400,
        169023600,
        216806400,
        232527600,
        248256000,
        263977200,
        279705600,
        295426800,
        311155200,
        326876400,
        342604800,
        358326000,
        374054400,
        390380400,
        406108800,
        421830000,
        437558400,
        453279600,
        469008000,
        484729200,
        500457600,
        516178800,
        531907200,
        547628400,
        576057600,
        579682800,
        607507200,
        611132400,
        638956800,
        642582000,
        671011200,
        674031600,
        702460800,
        705481200,
        733910400,
        737535600,
        765360000,
        768985200,
        796809600,
        800434800,
        828864000,
        831884400,
        860313600,
        863334000,
        891763200,
        894783600,
        923212800,
        926838000,
        954662400,
        958287600,
        972806400,
        986108400,
        989128800,
        1018162800,
        1020578400,
        1049612400,
        1052028000,
        1081062000,
        1084082400,
        1112511600,
        1115532000,
        1143961200,
        1146981600,
        1173596400,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -20364,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -18000,
            'offsetBefore' => -18000,
            'offsetAfter' => -14400,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -18000,
            'offsetBefore' => -14400,
            'offsetAfter' => -18000,
        ],
    ];
}