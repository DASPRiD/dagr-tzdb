<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class PuertoRico implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2233035335,
    ];
    public const STANDARD_OFFSETS = [
        -15865,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2233035335,
        -873057600,
        -758142000,
    ];
    public const WALL_OFFSETS = [
        -15865,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
