<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Panama implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524502512,
        -1946918424,
    ];
    public const STANDARD_OFFSETS = [
        -19088,
        -19176,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524502512,
        -1946918424,
    ];
    public const WALL_OFFSETS = [
        -19088,
        -19176,
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
