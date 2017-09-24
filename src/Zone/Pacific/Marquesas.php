<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Marquesas implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1806676920,
    ];
    public const STANDARD_OFFSETS = [
        -33480,
        -34200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1806676920,
    ];
    public const WALL_OFFSETS = [
        -33480,
        -34200,
    ];
    public const LAST_RULES = [
    ];
}
