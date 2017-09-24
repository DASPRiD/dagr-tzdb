<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Bougainville implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840178136,
        -2366790512,
        -868010400,
        -768906000,
        1419696000,
    ];
    public const STANDARD_OFFSETS = [
        37336,
        35312,
        36000,
        32400,
        36000,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840178136,
        -2366790512,
        -868010400,
        -768906000,
        1419696000,
    ];
    public const WALL_OFFSETS = [
        37336,
        35312,
        36000,
        32400,
        36000,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
