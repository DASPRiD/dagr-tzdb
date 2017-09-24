<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America\Indiana;

use Dagr\Tzdb\ZoneInfoInterface;

final class Vevay implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717647200,
        -495046800,
    ];
    public const STANDARD_OFFSETS = [
        -20416,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717647200,
        -1612108800,
        -1593968400,
        -1580659200,
        -776278800,
        -769395600,
        -31518000,
        -16653600,
        -925200,
        14796000,
        30524400,
        46850400,
        62578800,
        78300000,
        94028400,
        94708800,
        1143961200,
        1150610400,
        1173596400,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -20416,
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
