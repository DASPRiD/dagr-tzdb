<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kwajalein implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177492960,
        -7988400,
        745848000,
    ];
    public const STANDARD_OFFSETS = [
        40160,
        39600,
        -43200,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177492960,
        -7988400,
        745848000,
    ];
    public const WALL_OFFSETS = [
        40160,
        39600,
        -43200,
        43200,
    ];
    public const LAST_RULES = [
    ];
}
