<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Guam implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3944626740,
        -2177487540,
    ];
    public const STANDARD_OFFSETS = [
        -51660,
        34740,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3944626740,
        -2177487540,
    ];
    public const WALL_OFFSETS = [
        -51660,
        34740,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
