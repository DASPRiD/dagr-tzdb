<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tashkent implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441168631,
        -1247547600,
        670363200,
    ];
    public const STANDARD_OFFSETS = [
        16631,
        18000,
        21600,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441168631,
        -1247547600,
        354909600,
        370717200,
        386445600,
        402253200,
        417981600,
        433789200,
        449604000,
        477432000,
        493156800,
        508881600,
        524606400,
        540331200,
        556056000,
        572385600,
        588110400,
        603835200,
        619560000,
        635284800,
        651009600,
        666734400,
        670363200,
        681858000,
        694202400,
    ];
    public const WALL_OFFSETS = [
        16631,
        18000,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        25200,
        21600,
        18000,
        21600,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
