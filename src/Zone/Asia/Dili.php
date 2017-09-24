<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Dili implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1830414140,
        -879152400,
        199897200,
        969120000,
    ];
    public const STANDARD_OFFSETS = [
        30140,
        28800,
        32400,
        28800,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1830414140,
        -879152400,
        199897200,
        969120000,
    ];
    public const WALL_OFFSETS = [
        30140,
        28800,
        32400,
        28800,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
