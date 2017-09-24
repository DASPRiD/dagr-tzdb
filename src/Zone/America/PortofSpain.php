<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class PortofSpain implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1825098836,
    ];
    public const STANDARD_OFFSETS = [
        -14764,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1825098836,
    ];
    public const WALL_OFFSETS = [
        -14764,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
