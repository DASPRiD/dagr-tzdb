<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Maldives implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -315636840,
    ];
    public const STANDARD_OFFSETS = [
        17640,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -315636840,
    ];
    public const WALL_OFFSETS = [
        17640,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
