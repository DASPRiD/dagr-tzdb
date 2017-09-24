<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Syowa implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -407808000,
    ];
    public const STANDARD_OFFSETS = [
        0,
        10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -407808000,
    ];
    public const WALL_OFFSETS = [
        0,
        10800,
    ];
    public const LAST_RULES = [
    ];
}
