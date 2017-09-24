<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Enderbury implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177411740,
        307627200,
        788958000,
    ];
    public const STANDARD_OFFSETS = [
        -41060,
        -43200,
        -39600,
        46800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177411740,
        307627200,
        788958000,
    ];
    public const WALL_OFFSETS = [
        -41060,
        -43200,
        -39600,
        46800,
    ];
    public const LAST_RULES = [
    ];
}
