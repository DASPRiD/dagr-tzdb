<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Jayapura implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1172913768,
        -799491600,
        -189423000,
    ];
    public const STANDARD_OFFSETS = [
        33768,
        32400,
        34200,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1172913768,
        -799491600,
        -189423000,
    ];
    public const WALL_OFFSETS = [
        33768,
        32400,
        34200,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
