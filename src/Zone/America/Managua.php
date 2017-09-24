<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Managua implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524500892,
        -1121105688,
        105084000,
        161758800,
        694260000,
        717310800,
        725868000,
        852094800,
    ];
    public const STANDARD_OFFSETS = [
        -20708,
        -20712,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524500892,
        -1121105688,
        105084000,
        161758800,
        290584800,
        299134800,
        322034400,
        330584400,
        694260000,
        717310800,
        725868000,
        852094800,
        1113112800,
        1128229200,
        1146384000,
        1159682400,
    ];
    public const WALL_OFFSETS = [
        -20708,
        -20712,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
