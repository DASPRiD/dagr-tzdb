<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Colombo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2840159964,
        -2019705572,
        832962600,
        846266400,
        1145039400,
    ];
    public const STANDARD_OFFSETS = [
        19164,
        19172,
        19800,
        23400,
        21600,
        19800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2840159964,
        -2019705572,
        -883287000,
        -862639200,
        -764051400,
        832962600,
        846266400,
        1145039400,
    ];
    public const WALL_OFFSETS = [
        19164,
        19172,
        19800,
        21600,
        23400,
        19800,
        23400,
        21600,
        19800,
    ];
    public const LAST_RULES = [
    ];
}
