<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Qatar implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1577935568,
        76190400,
    ];
    public const STANDARD_OFFSETS = [
        12368,
        14400,
        10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1577935568,
        76190400,
    ];
    public const WALL_OFFSETS = [
        12368,
        14400,
        10800,
    ];
    public const LAST_RULES = [
    ];
}
