<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Perth implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2337925404,
    ];
    public const STANDARD_OFFSETS = [
        27804,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2337925404,
        -1672559940,
        -1665385200,
        -883634400,
        -876121200,
        -860392800,
        -845276400,
        152042400,
        162928800,
        436298400,
        447184800,
        690314400,
        699386400,
        1165082400,
        1174759200,
        1193508000,
        1206813600,
        1224957600,
        1238263200,
    ];
    public const WALL_OFFSETS = [
        27804,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
