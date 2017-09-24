<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Mawson implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -501206400,
        1255809600,
    ];
    public const STANDARD_OFFSETS = [
        0,
        21600,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -501206400,
        1255809600,
    ];
    public const WALL_OFFSETS = [
        0,
        21600,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
