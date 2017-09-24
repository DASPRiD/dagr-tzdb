<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Nipigon implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2366734016,
    ];
    public const STANDARD_OFFSETS = [
        -21184,
        -18000,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2366734016,
        -1632070800,
        -1615140000,
        -923252400,
        -765396000,
        156322800,
        172044000,
        187772400,
        204098400,
        219826800,
        235548000,
        251276400,
        266997600,
        282726000,
        298447200,
        314175600,
        329896800,
        345625200,
        361951200,
        377679600,
        393400800,
        409129200,
        424850400,
        440578800,
        456300000,
        472028400,
        487749600,
        503478000,
        519199200,
        534927600,
        551253600,
        576054000,
        582703200,
        607503600,
        614152800,
        638953200,
        645602400,
        671007600,
        677052000,
        702457200,
        709106400,
        733906800,
        740556000,
        765356400,
        772005600,
        796806000,
        803455200,
        828860400,
        834904800,
        860310000,
        866354400,
        891759600,
        898408800,
        923209200,
        929858400,
        954658800,
        961308000,
        986108400,
        992757600,
        1018162800,
        1024207200,
        1049612400,
        1055656800,
        1081062000,
        1087711200,
        1112511600,
        1119160800,
        1143961200,
        1150610400,
        1173596400,
        1194156000,
        1205046000,
        1225605600,
    ];
    public const WALL_OFFSETS = [
        -21184,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
        -14400,
        -18000,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -18000,
            'offsetBefore' => -18000,
            'offsetAfter' => -14400,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -18000,
            'offsetBefore' => -14400,
            'offsetAfter' => -18000,
        ],
    ];
}