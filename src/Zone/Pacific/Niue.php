<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Niue implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177412020,
        -599575200,
        276089400,
    ];
    public const STANDARD_OFFSETS = [
        -40780,
        -40800,
        -41400,
        -39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177412020,
        -599575200,
        276089400,
    ];
    public const WALL_OFFSETS = [
        -40780,
        -40800,
        -41400,
        -39600,
    ];
    public const LAST_RULES = [
    ];
}
