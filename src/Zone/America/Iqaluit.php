<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Iqaluit implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -865296000,
        941353200,
        972802800,
    ];
    public const STANDARD_OFFSETS = [
        0,
        -18000,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -865296000,
        -765396000,
        -148503600,
        -132174000,
        325062000,
        340783200,
        356511600,
        372837600,
        387961200,
        404287200,
        420015600,
        435736800,
        451465200,
        467186400,
        482914800,
        498636000,
        514364400,
        530085600,
        544604400,
        562140000,
        576054000,
        593589600,
        607503600,
        625039200,
        638953200,
        656488800,
        671007600,
        687938400,
        702457200,
        719992800,
        733906800,
        751442400,
        765356400,
        782892000,
        796806000,
        814341600,
        828860400,
        845791200,
        860310000,
        877240800,
        891759600,
        909295200,
        923209200,
        940744800,
        954054000,
        954662400,
        972802800,
        984895200,
        986108400,
        1016344800,
        1018162800,
        1048399200,
        1049612400,
        1079848800,
        1081062000,
        1111298400,
        1112511600,
        1142748000,
        1143961200,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        0,
        -14400,
        -18000,
        -10800,
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
