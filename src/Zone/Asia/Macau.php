<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Asia;

use Dagr\Tzdb\ZoneInfoInterface;

final class Macau implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1830411260,
    ];
    public const STANDARD_OFFSETS = [
        27260,
        28800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1830411260,
        -277360200,
        -257405400,
        -245910600,
        -225955800,
        -214473600,
        -194506200,
        -182406600,
        -163056600,
        -150969600,
        -131619600,
        -117088200,
        -101367000,
        -85638600,
        -69312600,
        -53584200,
        -37863000,
        -22134600,
        -6413400,
        9315000,
        25036200,
        40764600,
        56485800,
        72201600,
        87922800,
        103651200,
        119977200,
        135705600,
        151439400,
        167167800,
        182889000,
        198617400,
        214338600,
        230067000,
        245788200,
        261504000,
        277225200,
        292953600,
        309279600,
        325008000,
        340729200,
    ];
    public const WALL_OFFSETS = [
        27260,
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
