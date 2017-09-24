<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kolkata implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840162008,
        -891582800,
        -872058600,
    ];
    public const STANDARD_OFFSETS = [
        21208,
        21200,
        23400,
        19800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840162008,
        -891582800,
        -872058600,
        -862637400,
        -764145000,
    ];
    public const WALL_OFFSETS = [
        21208,
        21200,
        23400,
        19800,
        23400,
        19800,
    ];
    public const LAST_RULES = [
    ];
}
