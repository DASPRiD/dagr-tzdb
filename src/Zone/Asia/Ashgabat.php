<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Ashgabat implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1441166012,
        -1247544000,
        670366800,
        695768400,
    ];
    public const STANDARD_OFFSETS = [
        14012,
        14400,
        18000,
        14400,
        18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1441166012,
        -1247544000,
        354913200,
        370720800,
        386449200,
        402256800,
        417985200,
        433792800,
        449607600,
        479250000,
        494974800,
        510699600,
        526424400,
        542149200,
        557874000,
        573598800,
        589323600,
        605048400,
        620773200,
        636498000,
        652827600,
        668552400,
        670366800,
        683676000,
    ];
    public const WALL_OFFSETS = [
        14012,
        14400,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        21600,
        18000,
        14400,
        18000,
    ];
    public const LAST_RULES = [
    ];
}
