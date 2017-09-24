<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Makassar implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1172908656,
        -880272000,
        -766054800,
    ];
    public const STANDARD_OFFSETS = [
        28656,
        28800,
        32400,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1172908656,
        -880272000,
        -766054800,
    ];
    public const WALL_OFFSETS = [
        28656,
        28800,
        32400,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
