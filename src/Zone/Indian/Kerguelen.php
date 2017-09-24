<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kerguelen implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -631152000,
    ];
    public const STANDARD_OFFSETS = [
        0,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -631152000,
    ];
    public const WALL_OFFSETS = [
        0,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
