<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Samarkand implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441168073,
        -1247544000,
        370720800,
        386445600,
    ];
    public const STANDARD_OFFSETS = [
        16073,
        14400,
        18000,
        21600,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441168073,
        -1247544000,
        354913200,
        402256800,
        417985200,
        433792800,
        449607600,
        478040400,
        493765200,
        509490000,
        525214800,
        540939600,
        556664400,
        572389200,
        588718800,
        604443600,
        620168400,
        635893200,
        651618000,
        667342800,
        683067600,
        694202400,
    ];
    public const WALL_OFFSETS = [
        16073,
        14400,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
