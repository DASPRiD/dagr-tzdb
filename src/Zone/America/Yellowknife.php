<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Yellowknife implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1104537600,
    ];
    public const STANDARD_OFFSETS = [
        0,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1104537600,
        -880210800,
        -765388800,
        -150310800,
        -134586000,
        315558000,
        319017600,
        334746000,
        351072000,
        366800400,
        382521600,
        398250000,
        413971200,
        429699600,
        445420800,
        461149200,
        476870400,
        492598800,
        508924800,
        524048400,
        540374400,
        544611600,
        571824000,
        576061200,
        603273600,
        607510800,
        634723200,
        638960400,
        666172800,
        671014800,
        698227200,
        702464400,
        729676800,
        733914000,
        761126400,
        765363600,
        792576000,
        796813200,
        824025600,
        828867600,
        856080000,
        860317200,
        887529600,
        891766800,
        918979200,
        923216400,
        950428800,
        954666000,
        981878400,
        986115600,
        1013328000,
        1018170000,
        1045382400,
        1049619600,
        1076832000,
        1081069200,
        1108281600,
        1112518800,
        1139731200,
        1143968400,
        1194163200,
        1205053200,
        1225612800,
    ];
    public const WALL_OFFSETS = [
        0,
        -25200,
        -21600,
        -25200,
        -18000,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -25200,
            'offsetAfter' => -21600,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -25200,
            'offsetBefore' => -21600,
            'offsetAfter' => -25200,
        ],
    ];
}