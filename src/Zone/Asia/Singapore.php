<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Singapore implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2038200925,
        -1073028000,
        -894180000,
        -879665400,
        -767005200,
        378664200,
    ];
    public const STANDARD_OFFSETS = [
        24925,
        25200,
        26400,
        27000,
        32400,
        27000,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2038200925,
        -1167634800,
        -894180000,
        -879665400,
        -767005200,
        378664200,
    ];
    public const WALL_OFFSETS = [
        24925,
        25200,
        26400,
        27000,
        32400,
        27000,
        28800,
    ];
    public const LAST_RULES = [
    ];
}
