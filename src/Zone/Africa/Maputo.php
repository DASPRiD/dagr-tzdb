<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Maputo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2109291020,
    ];
    public const STANDARD_OFFSETS = [
        7820,
        7200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2109291020,
    ];
    public const WALL_OFFSETS = [
        7820,
        7200,
    ];
    public const LAST_RULES = [
    ];
}
