<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Pohnpei implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177490772,
    ];
    public const STANDARD_OFFSETS = [
        37972,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177490772,
    ];
    public const WALL_OFFSETS = [
        37972,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
