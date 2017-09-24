<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class CostaRica implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1545071027,
    ];
    public const STANDARD_OFFSETS = [
        -20173,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1545071027,
        288770400,
        297234000,
        320220000,
        328683600,
        664092000,
        678344400,
        695541600,
        700635600,
    ];
    public const WALL_OFFSETS = [
        -20173,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
