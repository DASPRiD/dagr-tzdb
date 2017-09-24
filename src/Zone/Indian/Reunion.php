<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Reunion implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1848886912,
    ];
    public const STANDARD_OFFSETS = [
        13312,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1848886912,
    ];
    public const WALL_OFFSETS = [
        13312,
        14400,
    ];
    public const LAST_RULES = [
    ];
}
