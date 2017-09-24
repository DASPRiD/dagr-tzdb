<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Curacao implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1826738653,
        -157750200,
    ];
    public const STANDARD_OFFSETS = [
        -16547,
        -16200,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1826738653,
        -157750200,
    ];
    public const WALL_OFFSETS = [
        -16547,
        -16200,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
