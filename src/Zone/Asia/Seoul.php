<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Seoul implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1948782472,
        -1830414600,
        -498128400,
        -264933000,
    ];
    public const STANDARD_OFFSETS = [
        30472,
        30600,
        32400,
        30600,
        32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1948782472,
        -1830414600,
        -498128400,
        -462702600,
        -451733400,
        -429784200,
        -418296600,
        -399544200,
        -387451800,
        -368094600,
        -356002200,
        -336645000,
        -324552600,
        -305195400,
        -293103000,
        -264933000,
        547578000,
        560883600,
        579027600,
        592333200,
    ];
    public const WALL_OFFSETS = [
        30472,
        30600,
        32400,
        30600,
        34200,
        30600,
        34200,
        30600,
        34200,
        30600,
        34200,
        30600,
        34200,
        30600,
        34200,
        30600,
        32400,
        36000,
        32400,
        36000,
        32400,
    ];
    public const LAST_RULES = [
    ];
}
