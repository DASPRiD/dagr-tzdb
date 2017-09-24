<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Ndjamena implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1830387612,
    ];
    public const STANDARD_OFFSETS = [
        3612,
        3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1830387612,
        308703600,
        321314400,
    ];
    public const WALL_OFFSETS = [
        3612,
        3600,
        7200,
        3600,
    ];
    public const LAST_RULES = [
    ];
}
