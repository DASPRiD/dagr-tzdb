<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Eucla implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2337928528,
    ];
    public const STANDARD_OFFSETS = [
        30928,
        31500,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2337928528,
        -1672562640,
        -1665387900,
        -883637100,
        -876123900,
        -860395500,
        -845883900,
        151434900,
        162926100,
        435690900,
        447182100,
        690311700,
        699383700,
        1165079700,
        1174756500,
        1192900500,
        1206206100,
        1224350100,
        1237655700,
    ];
    public const WALL_OFFSETS = [
        30928,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
        35100,
        31500,
    ];
    public const LAST_RULES = [
    ];
}
