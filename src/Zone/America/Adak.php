<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Adak implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3225356001,
        -2188944802,
        436363200,
    ];
    public const STANDARD_OFFSETS = [
        44001,
        -42398,
        -39600,
        -36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3225356001,
        -2188944802,
        -883573200,
        -757512000,
        -31496400,
        -29332800,
        -13604400,
        2116800,
        17845200,
        33566400,
        49294800,
        65016000,
        80744400,
        97070400,
        112798800,
        128520000,
        162392400,
        191419200,
        207147600,
        222868800,
        238597200,
        254923200,
        270046800,
        286372800,
        302101200,
        317822400,
        333550800,
        349272000,
        365000400,
        380721600,
        396450000,
        412171200,
        427899600,
        436363200,
        443012400,
        458740800,
        474462000,
        490190400,
        505911600,
        521640000,
        537361200,
        544622400,
        569415600,
        576072000,
        600865200,
        607521600,
        632314800,
        638971200,
        663764400,
        671025600,
        695214000,
        702475200,
        727268400,
        733924800,
        758718000,
        765374400,
        790167600,
        796824000,
        821617200,
        828878400,
        853066800,
        860328000,
        884516400,
        891777600,
        916570800,
        923227200,
        948020400,
        954676800,
        979470000,
        986126400,
        1010919600,
        1018180800,
        1042369200,
        1049630400,
        1073818800,
        1081080000,
        1105873200,
        1112529600,
        1137322800,
        1143979200,
        1194174000,
        1205064000,
        1225623600,
    ];
    public const WALL_OFFSETS = [
        44001,
        -42398,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -39600,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
        -32400,
        -36000,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -36000,
            'offsetBefore' => -36000,
            'offsetAfter' => -32400,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -36000,
            'offsetBefore' => -32400,
            'offsetAfter' => -36000,
        ],
    ];
}
