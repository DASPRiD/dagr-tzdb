<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Pitcairn implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177421580,
        893665800,
    ];
    public const STANDARD_OFFSETS = [
        -31220,
        -30600,
        -28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177421580,
        893665800,
    ];
    public const WALL_OFFSETS = [
        -31220,
        -30600,
        -28800,
    ];
    public const LAST_RULES = [
    ];
}
