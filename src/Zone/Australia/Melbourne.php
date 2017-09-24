<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Melbourne implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2364111592,
    ];
    public const STANDARD_OFFSETS = [
        34792,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2364111592,
        -1672567140,
        -1665392400,
        -883641600,
        -876128400,
        -860400000,
        -848912400,
        -828345600,
        -817462800,
        57686400,
        67968000,
        89136000,
        100022400,
        120585600,
        131472000,
        152035200,
        162921600,
        183484800,
        194976000,
        215539200,
        226425600,
        246988800,
        257875200,
        278438400,
        289324800,
        309888000,
        320774400,
        341337600,
        352224000,
        372787200,
        384278400,
        404841600,
        415728000,
        436291200,
        447177600,
        467740800,
        478627200,
        499190400,
        511286400,
        530035200,
        542736000,
        561484800,
        574790400,
        594144000,
        606240000,
        625593600,
        637689600,
        657043200,
        667929600,
        688492800,
        699379200,
        719942400,
        731433600,
        751996800,
        762883200,
        783446400,
        796147200,
        814896000,
        828201600,
        846345600,
        859651200,
        877795200,
        891100800,
        909244800,
        922550400,
        941299200,
        954000000,
        967305600,
        985449600,
        1004198400,
        1017504000,
        1035648000,
        1048953600,
        1067097600,
        1080403200,
        1099152000,
        1111852800,
        1130601600,
        1143907200,
        1162051200,
        1174752000,
        1193500800,
        1207411200,
        1223136000,
        1238860800,
        1254585600,
    ];
    public const WALL_OFFSETS = [
        34792,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
    ];
    public const LAST_RULES = [
        [
            'month' => 4,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 36000,
            'offsetBefore' => 39600,
            'offsetAfter' => 36000,
        ],
        [
            'month' => 10,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => 36000,
            'offsetBefore' => 36000,
            'offsetAfter' => 39600,
        ],
    ];
}
