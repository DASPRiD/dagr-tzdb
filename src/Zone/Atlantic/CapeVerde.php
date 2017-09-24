<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Atlantic;

use Dagr\Tzdb\ZoneInfoInterface;

final class CapeVerde implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1988144756,
        186120000,
    ];
    public const STANDARD_OFFSETS = [
        -5644,
        -7200,
        -3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1988144756,
        -862610400,
        -764118000,
        186120000,
    ];
    public const WALL_OFFSETS = [
        -5644,
        -7200,
        -3600,
        -7200,
        -3600,
    ];
    public const LAST_RULES = [
    ];
}
