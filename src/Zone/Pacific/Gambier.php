<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Gambier implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1806678012,
    ];
    public const STANDARD_OFFSETS = [
        -32388,
        -32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1806678012,
    ];
    public const WALL_OFFSETS = [
        -32388,
        -32400,
    ];
    public const LAST_RULES = [
    ];
}
