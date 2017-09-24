<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Norfolk implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177493112,
        -599656320,
        1443882600,
    ];
    public const STANDARD_OFFSETS = [
        40312,
        40320,
        41400,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177493112,
        -599656320,
        152029800,
        162912600,
        1443882600,
    ];
    public const WALL_OFFSETS = [
        40312,
        40320,
        41400,
        45000,
        41400,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
