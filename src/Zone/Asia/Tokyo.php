<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tokyo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2587712400,
    ];
    public const STANDARD_OFFSETS = [
        33539,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2587712400,
        -683794800,
        -672566400,
        -654764400,
        -641116800,
        -620290800,
        -609062400,
        -588841200,
        -577612800,
    ];
    public const WALL_OFFSETS = [
        33539,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
        36000,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
