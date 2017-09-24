<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Nassau implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1825095030,
    ];
    public const STANDARD_OFFSETS = [
        -18570,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1825095030,
        -179341200,
        -163620000,
        -147891600,
        -131565600,
        -116442000,
        -100116000,
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
        136364400,
        152085600,
        167814000,
        183535200,
        189320400,
        193816800,
        209545200,
        225266400,
        240994800,
        256716000,
        272444400,
        288165600,
        303894000,
        319615200,
        335343600,
        351669600,
        366793200,
        383119200,
        398847600,
        414568800,
        430297200,
        446018400,
        461746800,
        477468000,
        493196400,
        508917600,
        524646000,
        540972000,
        544604400,
        572421600,
        576054000,
        603871200,
        607503600,
        635320800,
        638953200,
        666770400,
        671007600,
        698220000,
        702457200,
        730274400,
        733906800,
        761724000,
        765356400,
        793173600,
        796806000,
        824623200,
        828860400,
        856072800,
        860310000,
        888127200,
        891759600,
        919576800,
        923209200,
        951026400,
        954658800,
        982476000,
        986108400,
        1013925600,
        1018162800,
        1045375200,
        1049612400,
        1077429600,
        1081062000,
        1108879200,
        1112511600,
        1140328800,
        1143961200,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -18570,
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
