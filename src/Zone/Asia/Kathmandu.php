<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Kathmandu implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1577943676,
        504901800,
    ];
    public const STANDARD_OFFSETS = [
        20476,
        19800,
        20700,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1577943676,
        504901800,
    ];
    public const WALL_OFFSETS = [
        20476,
        19800,
        20700,
    ];
    public const LAST_RULES = [
    ];
}
