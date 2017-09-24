<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Antarctica;

use Dagr\Tzdb\ZoneInfoInterface;

final class Davis implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -409190400,
        -163062000,
        -28857600,
        1255806000,
        1268251200,
        1319742000,
        1329854400,
    ];
    public const STANDARD_OFFSETS = [
        0,
        25200,
        0,
        25200,
        18000,
        25200,
        18000,
        25200,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -409190400,
        -163062000,
        -28857600,
        1255806000,
        1268251200,
        1319742000,
        1329854400,
    ];
    public const WALL_OFFSETS = [
        0,
        25200,
        0,
        25200,
        18000,
        25200,
        18000,
        25200,
    ];
    public const LAST_RULES = [
    ];
}
