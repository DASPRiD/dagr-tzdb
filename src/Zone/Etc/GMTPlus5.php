<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Etc;

use Dagr\Tzdb\ZoneInfoInterface;

final class GMTPlus5 implements ZoneInfoInterface
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