<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class PortoVelho implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1767210264,
    ];
    public const STANDARD_OFFSETS = [
        -15336,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1767210264,
        -1206954000,
        -1191358800,
        -1175371200,
        -1159822800,
        -633816000,
        -622065600,
        -602280000,
        -591829200,
        -570744000,
        -560206800,
        -539121600,
        -531349200,
        -191361600,
        -184194000,
        -155160000,
        -150066000,
        -128894400,
        -121122000,
        -99950400,
        -89586000,
        -68414400,
        -57963600,
        499752000,
        511239600,
        530596800,
        540270000,
        562132800,
        571201200,
    ];
    public const WALL_OFFSETS = [
        -15336,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
        -10800,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
