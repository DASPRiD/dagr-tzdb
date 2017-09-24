<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Lagos implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1588464816,
    ];
    public const STANDARD_OFFSETS = [
        816,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1588464816,
    ];
    public const WALL_OFFSETS = [
        816,
        3600,
    ];
    public const LAST_RULES = [
    ];
}
