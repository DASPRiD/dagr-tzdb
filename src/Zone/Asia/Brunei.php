<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Brunei implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1383464380,
        -1167636600,
    ];
    public const STANDARD_OFFSETS = [
        27580,
        27000,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1383464380,
        -1167636600,
    ];
    public const WALL_OFFSETS = [
        27580,
        27000,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
