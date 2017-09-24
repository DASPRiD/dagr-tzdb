<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Guatemala implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1617040676,
    ];
    public const STANDARD_OFFSETS = [
        -21724,
        -21600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1617040676,
        123055200,
        130914000,
        422344800,
        433054800,
        669708000,
        684219600,
        1146376800,
        1159678800,
    ];
    public const WALL_OFFSETS = [
        -21724,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
        -18000,
        -21600,
    ];
    public const LAST_RULES = [
    ];
}
