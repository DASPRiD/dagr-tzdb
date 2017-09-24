<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kosrae implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177491916,
        -7988400,
        915105600,
    ];
    public const STANDARD_OFFSETS = [
        39116,
        39600,
        43200,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177491916,
        -7988400,
        915105600,
    ];
    public const WALL_OFFSETS = [
        39116,
        39600,
        43200,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
