<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Efate implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1829387596,
    ];
    public const STANDARD_OFFSETS = [
        40396,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1829387596,
        433256400,
        448977600,
        467298000,
        480427200,
        496760400,
        511876800,
        528210000,
        543931200,
        559659600,
        575380800,
        591109200,
        606830400,
        622558800,
        638280000,
        654008400,
        669729600,
        686062800,
        696340800,
        719931600,
        727790400,
    ];
    public const WALL_OFFSETS = [
        40396,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
        43200,
        39600,
    ];
    public const LAST_RULES = [
    ];
}
