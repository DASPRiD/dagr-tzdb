<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Palau implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177485076,
    ];
    public const STANDARD_OFFSETS = [
        32276,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177485076,
    ];
    public const WALL_OFFSETS = [
        32276,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
