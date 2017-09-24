<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class LaPaz implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1192307244,
    ];
    public const STANDARD_OFFSETS = [
        -16356,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1205954844,
        -1192307244,
    ];
    public const WALL_OFFSETS = [
        -16356,
        -12756,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
