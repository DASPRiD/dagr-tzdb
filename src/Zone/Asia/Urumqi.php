<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Urumqi implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1325483420,
    ];
    public const STANDARD_OFFSETS = [
        21020,
        21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1325483420,
    ];
    public const WALL_OFFSETS = [
        21020,
        21600,
    ];
    public const LAST_RULES = [
    ];
}
