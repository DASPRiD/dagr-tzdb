<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone;

use Dagr\Tzdb\ZoneInfoInterface;

final class EST implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
    ];
    public const STANDARD_OFFSETS = [
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
    ];
    public const WALL_OFFSETS = [
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
