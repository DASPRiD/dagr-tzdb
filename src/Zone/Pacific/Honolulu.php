<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Honolulu implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2334101314,
        -712150200,
    ];
    public const STANDARD_OFFSETS = [
        -37886,
        -37800,
        -36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2334101314,
        -1157283000,
        -1155436200,
        -880198200,
        -765376200,
        -712150200,
    ];
    public const WALL_OFFSETS = [
        -37886,
        -37800,
        -34200,
        -37800,
        -34200,
        -37800,
        -36000,
    ];
    public const LAST_RULES = [
    ];
}
