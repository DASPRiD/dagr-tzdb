<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Europe;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tallinn implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1638322740,
        -1593824400,
        -1535938740,
        -927943200,
        -892954800,
        -797652000,
        606870000,
    ];
    public const STANDARD_OFFSETS = [
        5940,
        3600,
        5940,
        7200,
        10800,
        3600,
        10800,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1638322740,
        -1632006000,
        -1618700400,
        -1593824400,
        -1535938740,
        -927943200,
        -892954800,
        -857257200,
        -844556400,
        -828226800,
        -812502000,
        -797652000,
        354920400,
        370728000,
        386456400,
        402264000,
        417992400,
        433800000,
        449614800,
        464137200,
        479862000,
        495586800,
        511311600,
        527036400,
        542761200,
        558486000,
        574210800,
        590540400,
        606265200,
        606870000,
        622598400,
        631670400,
        647395200,
        663120000,
        678844800,
        694569600,
        710294400,
        726019200,
        741744000,
        757468800,
        773193600,
        788918400,
        804643200,
        820972800,
        839116800,
        852422400,
        870566400,
        883872000,
        902016000,
        914720400,
        933469200,
        1014242400,
        1027213200,
        1040518800,
        1059267600,
        1071968400,
    ];
    public const WALL_OFFSETS = [
        5940,
        3600,
        7200,
        3600,
        5940,
        7200,
        10800,
        7200,
        3600,
        7200,
        3600,
        7200,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        14400,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
        7200,
        10800,
    ];
    public const LAST_RULES = [
        [
            'month' => 7,
            'dayOfMonth' => 21,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 10800,
            'offsetAfter' => 7200,
        ],
        [
            'month' => 12,
            'dayOfMonth' => 20,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 7200,
            'offsetBefore' => 7200,
            'offsetAfter' => 10800,
        ],
    ];
}
