<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Guadalcanal implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1806748788,
    ];
    public const STANDARD_OFFSETS = [
        38388,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1806748788,
    ];
    public const WALL_OFFSETS = [
        38388,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
