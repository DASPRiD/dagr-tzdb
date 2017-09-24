<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Brisbane implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2366791928,
    ];
    public const STANDARD_OFFSETS = [
        36728,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2366791928,
        -1672567140,
        -1665392400,
        -883641600,
        -876128400,
        -860400000,
        -846493200,
        -828345600,
        -814438800,
        57686400,
        67968000,
        625593600,
        636480000,
        657043200,
        667929600,
        688492800,
        699379200,
    ];
    public const WALL_OFFSETS = [
        36728,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
        39600,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
