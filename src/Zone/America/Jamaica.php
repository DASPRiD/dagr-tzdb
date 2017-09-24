<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Jamaica implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1827687169,
    ];
    public const STANDARD_OFFSETS = [
        -18431,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1827687169,
        126248400,
        129103200,
        162370800,
        192002400,
        207730800,
        223452000,
        239180400,
        254901600,
        270630000,
        286956000,
        302079600,
        318405600,
        334134000,
        349855200,
        365583600,
        381304800,
        397033200,
        412754400,
        428482800,
        441777600,
    ];
    public const WALL_OFFSETS = [
        -18431,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
