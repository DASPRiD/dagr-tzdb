<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Australia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Lindeman implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2366790956,
    ];
    public const STANDARD_OFFSETS = [
        35756,
        36000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2366790956,
        -1672567140,
        -1665392400,
        -883641600,
        -876128400,
        -860400000,
        -846493200,
        -828345600,
        -815043600,
        57081600,
        67363200,
        624988800,
        636480000,
        656438400,
        667929600,
        687888000,
        699379200,
        719942400,
        731433600,
        751996800,
        762883200,
    ];
    public const WALL_OFFSETS = [
        35756,
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
        39600,
        36000,
        39600,
        36000,
    ];
    public const LAST_RULES = [
    ];
}
