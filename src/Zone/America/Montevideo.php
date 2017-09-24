<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Montevideo implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -1567455316,
        -853619400,
    ];
    public const STANDARD_OFFSETS = [
        -13484,
        -12600,
        -10800,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -1567455316,
        -1459542600,
        -1443819600,
        -1428006600,
        -1412283600,
        -1396470600,
        -1380747600,
        -1141590600,
        -1128459600,
        -1110141000,
        -1097010000,
        -1078691400,
        -1065560400,
        -1046637000,
        -1033938000,
        -1015187400,
        -1002488400,
        -983737800,
        -971038800,
        -952288200,
        -938984400,
        -920838600,
        -907534800,
        -896819400,
        -883602000,
        -853619400,
        -845848800,
        -334789200,
        -319672800,
        -314226000,
        -309996000,
        -149720400,
        -134604000,
        -118270800,
        -100044000,
        -86821200,
        -68508000,
        -50446800,
        -34119000,
        -18910800,
        -2583000,
        12625200,
        28953000,
        72932400,
        82692000,
        132116400,
        156911400,
        212983200,
        250052400,
        260244000,
        307594800,
        325994400,
        566449200,
        574308000,
        597812400,
        605671200,
        625633200,
        636516000,
        656478000,
        667965600,
        688532400,
        699415200,
        719377200,
        730864800,
        1095562800,
        1111896000,
        1128834000,
        1142136000,
        1159678800,
        1173585600,
        1191733200,
        1205035200,
        1223182800,
        1236484800,
        1254632400,
        1268539200,
        1286082000,
        1299988800,
        1317531600,
        1331438400,
        1349586000,
        1362888000,
        1381035600,
        1394337600,
        1412485200,
        1425787200,
    ];
    public const WALL_OFFSETS = [
        -13484,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -10800,
        -12600,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -9000,
        -10800,
        -9000,
        -10800,
        -9000,
        -10800,
        -7200,
        -10800,
        -9000,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
        -7200,
        -10800,
    ];
    public const LAST_RULES = [
    ];
}