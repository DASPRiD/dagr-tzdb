<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Pacific;

use Dagr\Tzdb\ZoneInfoInterface;

final class Noumea implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1829387148,
    ];
    public const STANDARD_OFFSETS = [
        39948,
        39600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1829387148,
        250002000,
        257342400,
        281451600,
        288878400,
        849366000,
        857228400,
    ];
    public const WALL_OFFSETS = [
        39948,
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
