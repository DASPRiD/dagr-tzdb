<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Rarotonga implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177414456,
        279714600,
    ];
    public const STANDARD_OFFSETS = [
        -38344,
        -37800,
        -36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177414456,
        279714600,
        289387800,
        309952800,
        320837400,
        341402400,
        352287000,
        372852000,
        384341400,
        404906400,
        415791000,
        436356000,
        447240600,
        467805600,
        478690200,
        499255200,
        510139800,
        530704800,
        541589400,
        562154400,
        573643800,
        594208800,
        605093400,
        625658400,
        636543000,
        657108000,
        667992600,
    ];
    public const WALL_OFFSETS = [
        -38344,
        -37800,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
        -34200,
        -36000,
    ];
    public const LAST_RULES = [
    ];
}
