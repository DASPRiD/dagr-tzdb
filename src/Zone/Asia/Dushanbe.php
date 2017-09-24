<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Dushanbe implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441168512,
        -1247547600,
        670363200,
    ];
    public const STANDARD_OFFSETS = [
        16512,
        18000,
        21600,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441168512,
        -1247547600,
        354909600,
        370717200,
        386445600,
        402253200,
        417981600,
        433789200,
        449604000,
        479246400,
        495576000,
        511300800,
        527025600,
        542750400,
        558475200,
        574200000,
        589924800,
        605649600,
        621374400,
        637099200,
        652824000,
        668548800,
        684363600,
    ];
    public const WALL_OFFSETS = [
        16512,
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
    ];
    public const LAST_RULES = [
    ];
}
