<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kabul implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524538208,
        -788932800,
    ];
    public const STANDARD_OFFSETS = [
        16608,
        14400,
        16200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524538208,
        -788932800,
    ];
    public const WALL_OFFSETS = [
        16608,
        14400,
        16200,
    ];
    public const LAST_RULES = [
    ];
}
