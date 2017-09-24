<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Phoenix implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2717643600,
    ];
    public const STANDARD_OFFSETS = [
        -26898,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2717643600,
        -1627225200,
        -1609084800,
        -1595775600,
        -820519140,
        -812653140,
        -796845540,
        -79542000,
        -63820800,
    ];
    public const WALL_OFFSETS = [
        -26898,
        -25200,
        -21600,
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
