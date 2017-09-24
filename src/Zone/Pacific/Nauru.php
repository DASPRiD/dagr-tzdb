<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Nauru implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1545131260,
        -877347000,
        -800960400,
        294323400,
    ];
    public const STANDARD_OFFSETS = [
        40060,
        41400,
        32400,
        41400,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1545131260,
        -877347000,
        -800960400,
        294323400,
    ];
    public const WALL_OFFSETS = [
        40060,
        41400,
        32400,
        41400,
        43200,
    ];
    public const LAST_RULES = [
    ];
}
