<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Bangkok implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1570084924,
    ];
    public const STANDARD_OFFSETS = [
        24124,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1570084924,
    ];
    public const WALL_OFFSETS = [
        24124,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
