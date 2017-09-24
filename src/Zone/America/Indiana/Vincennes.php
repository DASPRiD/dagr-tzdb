<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America\Indiana;

use Dagr\Tzdb\ZoneInfoInterface;

final class Vincennes implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717647200,
        -179337600,
        1143961200,
        1194159600,
    ];
    public const STANDARD_OFFSETS = [
        -21007,
        -21600,
        -18000,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717647200,
        -1634486400,
        -1616346000,
        -1603036800,
        -1584291600,
        -880214400,
        -766602000,
        -747244800,
        -733942800,
        -526492800,
        -513190800,
        -495043200,
        -481741200,
        -462996000,
        -450291600,
        -431539200,
        -418237200,
        -400089600,
        -386787600,
        -368640000,
        -355338000,
        -337190400,
        -323888400,
        -305740800,
        -289414800,
        -273686400,
        -260989200,
        -242236800,
        -226515600,
        -210787200,
        -195066000,
        -179337600,
        -23302800,
        -6976800,
        8751600,
        24472800,
        1159686000,
        1173600000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -21007,
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