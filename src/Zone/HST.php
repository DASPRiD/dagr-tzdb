<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone;

use Dagr\Tzdb\ZoneInfoInterface;

final class HST implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
    ];
    public const STANDARD_OFFSETS = [
        -36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
    ];
    public const WALL_OFFSETS = [
        -36000,
    ];
    public const LAST_RULES = [
    ];
}
