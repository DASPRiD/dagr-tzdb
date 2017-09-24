<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Casey implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -31536000,
        1255802400,
        1267714800,
        1319738400,
        1329843600,
        1477065600,
    ];
    public const STANDARD_OFFSETS = [
        0,
        28800,
        39600,
        28800,
        39600,
        28800,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -31536000,
        1255802400,
        1267714800,
        1319738400,
        1329843600,
        1477065600,
    ];
    public const WALL_OFFSETS = [
        0,
        28800,
        39600,
        28800,
        39600,
        28800,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
