<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Cocos implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2209012060,
    ];
    public const STANDARD_OFFSETS = [
        23260,
        23400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2209012060,
    ];
    public const WALL_OFFSETS = [
        23260,
        23400,
    ];
    public const LAST_RULES = [
    ];
}
