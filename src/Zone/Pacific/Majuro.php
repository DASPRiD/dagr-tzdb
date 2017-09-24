<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Majuro implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177493888,
        -7988400,
    ];
    public const STANDARD_OFFSETS = [
        41088,
        39600,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177493888,
        -7988400,
    ];
    public const WALL_OFFSETS = [
        41088,
        39600,
        43200,
    ];
    public const LAST_RULES = [
    ];
}
