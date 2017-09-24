<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Pontianak implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1172906240,
        -881220600,
        -766054800,
        -683883000,
        -620812800,
        -189415800,
        567964800,
    ];
    public const STANDARD_OFFSETS = [
        26240,
        27000,
        32400,
        27000,
        28800,
        27000,
        28800,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1172906240,
        -881220600,
        -766054800,
        -683883000,
        -620812800,
        -189415800,
        567964800,
    ];
    public const WALL_OFFSETS = [
        26240,
        27000,
        32400,
        27000,
        28800,
        27000,
        28800,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
