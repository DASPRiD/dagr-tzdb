<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Africa;

use Dagr\Tzdb\ZoneInfoInterface;

final class Abidjan implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1830383032,
    ];
    public const STANDARD_OFFSETS = [
        -968,
        0,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1830383032,
    ];
    public const WALL_OFFSETS = [
        -968,
        0,
    ];
    public const LAST_RULES = [
    ];
}
