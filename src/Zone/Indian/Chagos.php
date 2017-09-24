<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Indian;

use Dagr\Tzdb\ZoneInfoInterface;

final class Chagos implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1988167780,
        820436400,
    ];
    public const STANDARD_OFFSETS = [
        17380,
        18000,
        21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1988167780,
        820436400,
    ];
    public const WALL_OFFSETS = [
        17380,
        18000,
        21600,
    ];
    public const LAST_RULES = [
    ];
}
