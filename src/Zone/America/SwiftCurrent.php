<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class SwiftCurrent implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2030201320,
        73472400,
    ];
    public const STANDARD_OFFSETS = [
        -25880,
        -25200,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2030201320,
        -1632063600,
        -1615132800,
        -880210800,
        -765388800,
        -747068400,
        -732729600,
        -716396400,
        -703094400,
        -684946800,
        -671644800,
        -652892400,
        -640195200,
        -400086000,
        -384364800,
        -337186800,
        -321465600,
        -305737200,
        -292435200,
        -273682800,
        -260985600,
        73472400,
    ];
    public const WALL_OFFSETS = [
        -25880,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
        -25200,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
