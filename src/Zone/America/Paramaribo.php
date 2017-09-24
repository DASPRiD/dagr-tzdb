<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Paramaribo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1861906760,
        -1104524348,
        -765317964,
        465449400,
    ];
    public const STANDARD_OFFSETS = [
        -13240,
        -13252,
        -13236,
        -12600,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1861906760,
        -1104524348,
        -765317964,
        465449400,
    ];
    public const WALL_OFFSETS = [
        -13240,
        -13252,
        -13236,
        -12600,
        -10800,
    ];
    public const LAST_RULES = [
    ];
}
