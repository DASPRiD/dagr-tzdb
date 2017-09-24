<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Vostok implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -380073600,
    ];
    public const STANDARD_OFFSETS = [
        0,
        21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -380073600,
    ];
    public const WALL_OFFSETS = [
        0,
        21600,
    ];
    public const LAST_RULES = [
    ];
}
