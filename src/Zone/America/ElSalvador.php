<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class ElSalvador implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1546279392,
    ];
    public const STANDARD_OFFSETS = [
        -21408,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1546279392,
        547020000,
        559717200,
        578469600,
        591166800,
    ];
    public const WALL_OFFSETS = [
        -21408,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
