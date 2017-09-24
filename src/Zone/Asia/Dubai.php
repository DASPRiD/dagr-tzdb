<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Dubai implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1577936472,
    ];
    public const STANDARD_OFFSETS = [
        13272,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1577936472,
    ];
    public const WALL_OFFSETS = [
        13272,
        14400,
    ];
    public const LAST_RULES = [
    ];
}
