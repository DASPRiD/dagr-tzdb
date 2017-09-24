<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Chuuk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177489228,
    ];
    public const STANDARD_OFFSETS = [
        36428,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177489228,
    ];
    public const WALL_OFFSETS = [
        36428,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
