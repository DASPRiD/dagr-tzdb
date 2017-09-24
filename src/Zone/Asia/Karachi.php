<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Karachi implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1988166492,
        -576135000,
    ];
    public const STANDARD_OFFSETS = [
        16092,
        19800,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1988166492,
        -862637400,
        -764145000,
        -576135000,
        1018119600,
        1033840800,
        1212260400,
        1225476000,
        1239735600,
        1257012000,
    ];
    public const WALL_OFFSETS = [
        16092,
        19800,
        23400,
        19800,
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
