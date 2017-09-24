<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Darwin implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2364108200,
        -2230189200,
    ];
    public const STANDARD_OFFSETS = [
        31400,
        32400,
        34200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2364108200,
        -2230189200,
        -1672565340,
        -1665390600,
        -883639800,
        -876126600,
        -860398200,
        -844677000,
        -828343800,
        -813227400,
    ];
    public const WALL_OFFSETS = [
        31400,
        32400,
        34200,
        37800,
        34200,
        37800,
        34200,
        37800,
        34200,
        37800,
        34200,
    ];
    public const LAST_RULES = [
    ];
}
