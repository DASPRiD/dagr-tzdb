<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tegucigalpa implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1538503868,
    ];
    public const STANDARD_OFFSETS = [
        -20932,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1538503868,
        547020000,
        559717200,
        578469600,
        591166800,
        1146981600,
        1154926800,
    ];
    public const WALL_OFFSETS = [
        -20932,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
