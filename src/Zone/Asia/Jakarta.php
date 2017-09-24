<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Jakarta implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1451719200,
        -1172906400,
        -876641400,
        -766054800,
        -683883000,
        -620812800,
        -189415800,
    ];
    public const STANDARD_OFFSETS = [
        25632,
        26400,
        27000,
        32400,
        27000,
        28800,
        27000,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1451719200,
        -1172906400,
        -876641400,
        -766054800,
        -683883000,
        -620812800,
        -189415800,
    ];
    public const WALL_OFFSETS = [
        25632,
        26400,
        27000,
        32400,
        27000,
        28800,
        27000,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
