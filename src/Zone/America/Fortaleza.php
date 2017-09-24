<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Fortaleza implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1767216360,
    ];
    public const STANDARD_OFFSETS = [
        -9240,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1767216360,
        -1206957600,
        -1191362400,
        -1175374800,
        -1159826400,
        -633819600,
        -622069200,
        -602283600,
        -591832800,
        -570747600,
        -560210400,
        -539125200,
        -531352800,
        -191365200,
        -184197600,
        -155163600,
        -150069600,
        -128898000,
        -121125600,
        -99954000,
        -89589600,
        -68418000,
        -57967200,
        499748400,
        511236000,
        530593200,
        540266400,
        562129200,
        571197600,
        592974000,
        602042400,
        624423600,
        634701600,
        938919600,
        951616800,
        970974000,
        972180000,
        1003028400,
        1013911200,
    ];
    public const WALL_OFFSETS = [
        -9240,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
    ];
    public const LAST_RULES = [
    ];
}
