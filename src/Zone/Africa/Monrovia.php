<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Monrovia implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1604359012,
        63593070,
    ];
    public const STANDARD_OFFSETS = [
        -2588,
        -2670,
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1604359012,
        63593070,
    ];
    public const WALL_OFFSETS = [
        -2588,
        -2670,
        0,
    ];
    public const LAST_RULES = [
    ];
}
