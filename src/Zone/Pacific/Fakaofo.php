<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Fakaofo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177411704,
        1325242800,
    ];
    public const STANDARD_OFFSETS = [
        -41096,
        -39600,
        46800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177411704,
        1325242800,
    ];
    public const WALL_OFFSETS = [
        -41096,
        -39600,
        46800,
    ];
    public const LAST_RULES = [
    ];
}
