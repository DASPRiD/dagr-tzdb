<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Pyongyang implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1948782180,
        -1830414600,
        1439564400,
    ];
    public const STANDARD_OFFSETS = [
        30180,
        30600,
        32400,
        30600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1948782180,
        -1830414600,
        1439564400,
    ];
    public const WALL_OFFSETS = [
        30180,
        30600,
        32400,
        30600,
    ];
    public const LAST_RULES = [
    ];
}
