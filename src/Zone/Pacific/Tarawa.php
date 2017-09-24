<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Tarawa implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177494324,
    ];
    public const STANDARD_OFFSETS = [
        41524,
        43200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177494324,
    ];
    public const WALL_OFFSETS = [
        41524,
        43200,
    ];
    public const LAST_RULES = [
    ];
}
