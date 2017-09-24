<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Bissau implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1830380260,
        157770000,
    ];
    public const STANDARD_OFFSETS = [
        -3740,
        -3600,
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1830380260,
        157770000,
    ];
    public const WALL_OFFSETS = [
        -3740,
        -3600,
        0,
    ];
    public const LAST_RULES = [
    ];
}
