<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Rothera implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        218246400,
    ];
    public const STANDARD_OFFSETS = [
        0,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        218246400,
    ];
    public const WALL_OFFSETS = [
        0,
        -10800,
    ];
    public const LAST_RULES = [
    ];
}
