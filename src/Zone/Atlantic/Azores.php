<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\Atlantic;

use Dagr\Tzdb\ZoneInfoInterface;

final class Azores implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -2713904240,
        -1830377128,
        -118267200,
        717559200,
        733280400,
    ];
    public const STANDARD_OFFSETS = [
        -6160,
        -6872,
        -7200,
        -3600,
        0,
        -3600,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -2713904240,
        -1830377128,
        -1689548400,
        -1677794400,
        -1667430000,
        -1647730800,
        -1635807600,
        -1616194800,
        -1604358000,
        -1584658800,
        -1572735600,
        -1553036400,
        -1541199600,
        -1521500400,
        -1442444400,
        -1426806000,
        -1379286000,
        -1364338800,
        -1348441200,
        -1332889200,
        -1316386800,
        -1301439600,
        -1284332400,
        -1269990000,
        -1221433200,
        -1207090800,
        -1191193200,
        -1175036400,
        -1127689200,
        -1112137200,
        -1096844400,
        -1080687600,
        -1063580400,
        -1049238000,
        -1033340400,
        -1017183600,
        -1002495600,
        -985734000,
        -969231600,
        -950482800,
        -942015600,
        -922662000,
        -906937200,
        -891126000,
        -877474800,
        -873676800,
        -864000000,
        -857516400,
        -846025200,
        -842832000,
        -831513600,
        -826066800,
        -814575600,
        -810345600,
        -799459200,
        -794617200,
        -783126000,
        -778896000,
        -768009600,
        -763167600,
        -749257200,
        -733532400,
        -717624000,
        -701899200,
        -686174400,
        -670449600,
        -654724800,
        -639000000,
        -591825600,
        -575496000,
        -559771200,
        -544046400,
        -528321600,
        -512596800,
        -496872000,
        -481147200,
        -465422400,
        -449697600,
        -433972800,
        -417643200,
        -401918400,
        -386193600,
        -370468800,
        -354744000,
        -339019200,
        -323294400,
        -307569600,
        -291844800,
        -276120000,
        -260395200,
        -244670400,
        -228340800,
        -212616000,
        -196891200,
        -181166400,
        -165441600,
        -149716800,
        -133992000,
        -118267200,
        228272400,
        243997200,
        260326800,
        276051600,
        291776400,
        301456800,
        317178000,
        332906400,
        349236000,
        364960800,
        380685600,
        396410400,
        412138800,
        433303200,
        448423200,
        464148000,
        479872800,
        495597600,
        511322400,
        527047200,
        542772000,
        558496800,
        574221600,
        590551200,
        606276000,
        622000800,
        637725600,
        653450400,
        669175200,
        684900000,
        700624800,
        716349600,
        717559200,
        730256400,
        733280400,
        745981200,
        761706000,
        777430800,
        793155600,
        808880400,
        827024400,
        840330000,
        859078800,
        871779600,
    ];
    public const WALL_OFFSETS = [
        -6160,
        -6872,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        0,
        -3600,
        -7200,
        -3600,
        0,
        -3600,
        -7200,
        -3600,
        0,
        -3600,
        -7200,
        -3600,
        0,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        -7200,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
        -3600,
        0,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 17,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => -3600,
            'offsetBefore' => 0,
            'offsetAfter' => -3600,
        ],
        [
            'month' => 8,
            'dayOfMonth' => 16,
            'dayOfWeek' => 0,
            'time' => 3600,
            'timeEndOfDay' => false,
            'standardOffset' => -3600,
            'offsetBefore' => -3600,
            'offsetAfter' => 0,
        ],
    ];
}
