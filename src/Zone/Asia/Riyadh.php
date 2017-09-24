<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Riyadh implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -719636812,
    ];
    public const STANDARD_OFFSETS = [
        11212,
        10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -719636812,
    ];
    public const WALL_OFFSETS = [
        11212,
        10800,
    ];
    public const LAST_RULES = [
    ];
}
