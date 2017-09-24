<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class PortMoresby implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840176120,
        -2366790512,
    ];
    public const STANDARD_OFFSETS = [
        35320,
        35312,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840176120,
        -2366790512,
    ];
    public const WALL_OFFSETS = [
        35320,
        35312,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
