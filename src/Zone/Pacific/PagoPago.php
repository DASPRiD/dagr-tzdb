<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class PagoPago implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2855738232,
        -1861879032,
    ];
    public const STANDARD_OFFSETS = [
        45432,
        -40968,
        -39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2855738232,
        -1861879032,
    ];
    public const WALL_OFFSETS = [
        45432,
        -40968,
        -39600,
    ];
    public const LAST_RULES = [
    ];
}
