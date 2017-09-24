<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Atikokan implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2366733212,
        -765392400,
    ];
    public const STANDARD_OFFSETS = [
        -21988,
        -21600,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2366733212,
        -1632067200,
        -1615136400,
        -923248800,
    ];
    public const WALL_OFFSETS = [
        -21988,
        -21600,
        -18000,
        -21600,
        -18000,
    ];
    public const LAST_RULES = [
    ];
}
