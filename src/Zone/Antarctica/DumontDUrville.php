<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class DumontDUrville implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -725846400,
        -566992800,
        -415497600,
    ];
    public const STANDARD_OFFSETS = [
        0,
        36000,
        0,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -725846400,
        -566992800,
        -415497600,
    ];
    public const WALL_OFFSETS = [
        0,
        36000,
        0,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
