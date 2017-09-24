<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class HoChiMinh implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2004073600,
        -1851577590,
        -852105600,
        -782643600,
        -767869200,
        -718095600,
        -457776000,
        -315648000,
        171820800,
    ];
    public const STANDARD_OFFSETS = [
        25600,
        25590,
        25200,
        28800,
        32400,
        25200,
        28800,
        25200,
        28800,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2004073600,
        -1851577590,
        -852105600,
        -782643600,
        -767869200,
        -718095600,
        -457776000,
        -315648000,
        171820800,
    ];
    public const WALL_OFFSETS = [
        25600,
        25590,
        25200,
        28800,
        32400,
        25200,
        28800,
        25200,
        28800,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
