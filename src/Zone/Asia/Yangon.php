<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Yangon implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1577946280,
        -873268200,
        -778410000,
    ];
    public const STANDARD_OFFSETS = [
        23080,
        23400,
        32400,
        23400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1577946280,
        -873268200,
        -778410000,
    ];
    public const WALL_OFFSETS = [
        23080,
        23400,
        32400,
        23400,
    ];
    public const LAST_RULES = [
    ];
}
