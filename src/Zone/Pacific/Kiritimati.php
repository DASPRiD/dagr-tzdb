<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kiritimati implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177415040,
        307622400,
        788954400,
    ];
    public const STANDARD_OFFSETS = [
        -37760,
        -38400,
        -36000,
        50400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177415040,
        307622400,
        788954400,
    ];
    public const WALL_OFFSETS = [
        -37760,
        -38400,
        -36000,
        50400,
    ];
    public const LAST_RULES = [
    ];
}
