<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Atlantic;

use Dagr\Tzdb\ZoneInfoInterface;

final class Faroe implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1955748776,
    ];
    public const STANDARD_OFFSETS = [
        -1624,
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1955748776,
        349232400,
        364957200,
        380682000,
        396406800,
        412131600,
        427856400,
        443581200,
        459306000,
        475030800,
        490755600,
        506480400,
        522205200,
        538534800,
        554259600,
        569984400,
        585709200,
        601434000,
        617158800,
        632883600,
        648608400,
        664333200,
        680058000,
        695782800,
        712112400,
        727837200,
        743562000,
        759286800,
        775011600,
        790736400,
        806461200,
        822186000,
        840934800,
        853635600,
        872384400,
    ];
    public const WALL_OFFSETS = [
        -1624,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
        3600,
        0,
    ];
    public const LAST_RULES = [
        [
            'month' => 1,
            'dayOfMonth' => 19,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 0,
            'offsetAfter' => 3600,
        ],
        [
            'month' => 8,
            'dayOfMonth' => 20,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => 0,
            'offsetBefore' => 3600,
            'offsetAfter' => 0,
        ],
    ];
}
