<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Dhaka implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524543300,
        -891582800,
        -872058600,
        -862637400,
        -576138600,
    ];
    public const STANDARD_OFFSETS = [
        21700,
        21200,
        23400,
        19800,
        23400,
        21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524543300,
        -891582800,
        -872058600,
        -862637400,
        -576138600,
        1245430800,
        1262278800,
    ];
    public const WALL_OFFSETS = [
        21700,
        21200,
        23400,
        19800,
        23400,
        21600,
        25200,
        21600,
    ];
    public const LAST_RULES = [
    ];
}
