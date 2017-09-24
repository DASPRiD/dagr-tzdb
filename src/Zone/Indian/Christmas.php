<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Christmas implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2364102172,
    ];
    public const STANDARD_OFFSETS = [
        25372,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2364102172,
    ];
    public const WALL_OFFSETS = [
        25372,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
