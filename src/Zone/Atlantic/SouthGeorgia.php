<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Atlantic;

use Dagr\Tzdb\ZoneInfoInterface;

final class SouthGeorgia implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524512832,
    ];
    public const STANDARD_OFFSETS = [
        -8768,
        -7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524512832,
    ];
    public const WALL_OFFSETS = [
        -8768,
        -7200,
    ];
    public const LAST_RULES = [
    ];
}
