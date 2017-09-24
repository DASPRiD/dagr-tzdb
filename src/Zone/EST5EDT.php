<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone;

use Dagr\Tzdb\ZoneInfoInterface;

final class EST5EDT implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
    ];
    public const STANDARD_OFFSETS = [
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1633280400,
        -1615140000,
        -1601830800,
        -1583690400,
        -880218000,
        -765396000,
        -84387600,
        -68666400,
        -52938000,
        -37216800,
        -21488400,
        -5767200,
        9961200,
        25682400,
        41410800,
        57736800,
        73465200,
        89186400,
        104914800,
        120636000,
        126687600,
        152085600,
        162370800,
        183535200,
        199263600,
        215589600,
        230713200,
        247039200,
        262767600,
        278488800,
        294217200,
        309938400,
        325666800,
        341388000,
        357116400,
        372837600,
        388566000,
        404892000,
        420015600,
        436341600,
        452070000,
        467791200,
        483519600,
        499240800,
        514969200,
        530690400,
        544604400,
        562140000,
        576054000,
        594194400,
        607503600,
        625644000,
        638953200,
        657093600,
        671007600,
        688543200,
        702457200,
        719992800,
        733906800,
        752047200,
        765356400,
        783496800,
        796806000,
        814946400,
        828860400,
        846396000,
        860310000,
        877845600,
        891759600,
        909295200,
        923209200,
        941349600,
        954658800,
        972799200,
        986108400,
        1004248800,
        1018162800,
        1035698400,
        1049612400,
        1067148000,
        1081062000,
        1099202400,
        1112511600,
        1130652000,
        1143961200,
        1162101600,
        1173596400,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
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