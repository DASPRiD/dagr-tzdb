<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kuching implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1383463280,
        -1167636600,
        -879667200,
        -767005200,
    ];
    public const STANDARD_OFFSETS = [
        26480,
        27000,
        28800,
        32400,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1383463280,
        -1167636600,
        -1082448000,
        -1074586800,
        -1050825600,
        -1042964400,
        -1019289600,
        -1011428400,
        -987753600,
        -979892400,
        -956217600,
        -948356400,
        -924595200,
        -916734000,
        -893059200,
        -885198000,
        -879667200,
        -767005200,
    ];
    public const WALL_OFFSETS = [
        26480,
        27000,
        28800,
        30000,
        28800,
        30000,
        28800,
        30000,
        28800,
        30000,
        28800,
        30000,
        28800,
        30000,
        28800,
        30000,
        28800,
        32400,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
