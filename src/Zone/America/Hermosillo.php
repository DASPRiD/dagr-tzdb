<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Hermosillo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        -873828000,
        -661539600,
        28800,
    ];
    public const STANDARD_OFFSETS = [
        -26632,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -28800,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1514739600,
        -1343066400,
        -1234807200,
        -1220292000,
        -1207159200,
        -1191344400,
        -873828000,
        -661539600,
        28800,
        828867600,
        840960000,
        860317200,
        872409600,
        891766800,
        903859200,
    ];
    public const WALL_OFFSETS = [
        -26632,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -28800,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
    ];
    public const LAST_RULES = [
    ];
}
