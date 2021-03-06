<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America\Indiana;

use Dagr\Tzdb\ZoneInfoInterface;

final class Winamac implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717647200,
        -273686400,
        1143961200,
        1173600000,
    ];
    public const STANDARD_OFFSETS = [
        -20785,
        -21600,
        -18000,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717647200,
        -1610294400,
        -1591549200,
        -1578844800,
        -773859600,
        -769395600,
        -757364400,
        -747244800,
        -733942800,
        -715795200,
        -702493200,
        -684345600,
        -671043600,
        -652896000,
        -639594000,
        -620841600,
        -608144400,
        -589392000,
        -576090000,
        -557942400,
        -544640400,
        -526492800,
        -513190800,
        -495043200,
        -481741200,
        -463593600,
        -447267600,
        -431539200,
        -415818000,
        -400089600,
        -386787600,
        -368640000,
        -355338000,
        -337190400,
        -323888400,
        -305740800,
        -292438800,
        -273686400,
        -29955600,
        -14234400,
        1494000,
        17215200,
        1152428400,
        1173600000,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -20785,
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
        -21600,
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
