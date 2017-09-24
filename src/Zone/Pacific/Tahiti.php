<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tahiti implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1806674504,
    ];
    public const STANDARD_OFFSETS = [
        -35896,
        -36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1806674504,
    ];
    public const WALL_OFFSETS = [
        -35896,
        -36000,
    ];
    public const LAST_RULES = [
    ];
}
