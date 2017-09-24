<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Belem implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1767213964,
    ];
    public const STANDARD_OFFSETS = [
        -11636,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1767213964,
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
    ];
    public const WALL_OFFSETS = [
        -11636,
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
