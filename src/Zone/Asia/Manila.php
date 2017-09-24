<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Manila implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3944621040,
        -2229321840,
        -873273600,
        -794221200,
    ];
    public const STANDARD_OFFSETS = [
        -57360,
        29040,
        28800,
        32400,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3944621040,
        -2229321840,
        -1046678400,
        -1038733200,
        -873273600,
        -794221200,
        -496224000,
        -489315600,
        259344000,
        275151600,
    ];
    public const WALL_OFFSETS = [
        -57360,
        29040,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
