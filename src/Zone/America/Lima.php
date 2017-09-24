<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Lima implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524503108,
        -1938538284,
    ];
    public const STANDARD_OFFSETS = [
        -18492,
        -18516,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524503108,
        -1938538284,
        -1009825200,
        -1002052800,
        -986756400,
        -971035200,
        -955306800,
        -939585600,
        504939600,
        512712000,
        536475600,
        544248000,
        631170000,
        638942400,
        757400400,
        765172800,
    ];
    public const WALL_OFFSETS = [
        -18492,
        -18516,
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
