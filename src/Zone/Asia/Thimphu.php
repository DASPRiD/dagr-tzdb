<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Thimphu implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -706341516,
        560025000,
    ];
    public const STANDARD_OFFSETS = [
        21516,
        19800,
        21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -706341516,
        560025000,
    ];
    public const WALL_OFFSETS = [
        21516,
        19800,
        21600,
    ];
    public const LAST_RULES = [
    ];
}
