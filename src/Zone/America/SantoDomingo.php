<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class SantoDomingo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2524504824,
        -1159773600,
        152082000,
        972799200,
        975819600,
    ];
    public const STANDARD_OFFSETS = [
        -16776,
        -16800,
        -18000,
        -14400,
        -18000,
        -14400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2524504824,
        -1159773600,
        -100119600,
        -89668800,
        -5770800,
        4422600,
        25678800,
        33193800,
        57733200,
        64816200,
        89182800,
        96438600,
        120632400,
        127974600,
        152082000,
    ];
    public const WALL_OFFSETS = [
        -16776,
        -16800,
        -18000,
        -14400,
        -18000,
        -16200,
        -18000,
        -16200,
        -18000,
        -16200,
        -18000,
        -16200,
        -18000,
        -16200,
        -18000,
        -14400,
    ];
    public const LAST_RULES = [
    ];
}
