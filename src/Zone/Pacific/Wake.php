<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Wake implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177492788,
    ];
    public const STANDARD_OFFSETS = [
        39988,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177492788,
    ];
    public const WALL_OFFSETS = [
        39988,
        43200,
    ];
    public const LAST_RULES = [
    ];
}
