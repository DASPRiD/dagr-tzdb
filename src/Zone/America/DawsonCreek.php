<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class DawsonCreek implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2713881544,
        84013200,
    ];
    public const STANDARD_OFFSETS = [
        -28856,
        -28800,
        -25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2713881544,
        -1632060000,
        -1615129200,
        -880207200,
        -765385200,
        -716392800,
        -703090800,
        -684943200,
        -671641200,
        -652888800,
        -640191600,
        -621439200,
        -608137200,
        -589989600,
        -576687600,
        -558540000,
        -545238000,
        -527090400,
        -513788400,
        -495640800,
        -482338800,
        -463586400,
        -450889200,
        -432136800,
        -418834800,
        -400687200,
        -387385200,
        -369237600,
        -355935600,
        -337788000,
        -324486000,
        -305733600,
        -293036400,
        -274284000,
        -260982000,
        -242834400,
        -227113200,
        -211384800,
        -195663600,
        -179935200,
        -163609200,
        -148485600,
        -132159600,
        -116431200,
        -100710000,
        -84981600,
        -69260400,
        -53532000,
        -37810800,
        -22082400,
        -6361200,
        9367200,
        25693200,
        40816800,
        57142800,
        72871200,
    ];
    public const WALL_OFFSETS = [
        -28856,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
    ];
    public const LAST_RULES = [
    ];
}
