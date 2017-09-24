<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Shanghai implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2177481943,
    ];
    public const STANDARD_OFFSETS = [
        29143,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2177481943,
        -933494400,
        -923130000,
        -908784000,
        -891594000,
        515520000,
        527007600,
        545155200,
        558457200,
        576604800,
        589906800,
        608659200,
        621961200,
        640108800,
        653410800,
        671558400,
        684860400,
    ];
    public const WALL_OFFSETS = [
        29143,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
        28800,
        32400,
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
