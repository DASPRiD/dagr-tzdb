<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Mahe implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2006653308,
    ];
    public const STANDARD_OFFSETS = [
        13308,
        14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2006653308,
    ];
    public const WALL_OFFSETS = [
        13308,
        14400,
    ];
    public const LAST_RULES = [
    ];
}
