<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Zone\America;

use Dagr\Tzdb\ZoneInfoInterface;

final class Sitka implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
        -3225365927,
        -2188954727,
        436356000,
    ];
    public const STANDARD_OFFSETS = [
        53927,
        -32473,
        -28800,
        -32400,
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
        -3225365927,
        -2188954727,
        -883584000,
        -779900400,
        -769395600,
        -757357200,
        -31507200,
        -20271600,
        -4543200,
        11178000,
        26906400,
        43232400,
        58960800,
        74682000,
        90410400,
        106131600,
        121860000,
        137581200,
        162381600,
        169030800,
        216813600,
        232534800,
        248263200,
        263984400,
        279712800,
        295434000,
        311162400,
        326883600,
        342612000,
        358333200,
        374061600,
        390387600,
        406116000,
        421837200,
        436356000,
        436964400,
        452080800,
        467809200,
        483530400,
        499258800,
        515584800,
        531313200,
        547034400,
        576068400,
        578484000,
        607518000,
        609933600,
        638967600,
        641383200,
        671022000,
        672832800,
        702471600,
        704887200,
        733921200,
        736336800,
        765370800,
        767786400,
        796820400,
        799236000,
        828874800,
        830685600,
        860324400,
        862740000,
        891774000,
        894189600,
        923223600,
        925639200,
        954673200,
        957088800,
        986122800,
        988538400,
        1018177200,
        1019988000,
        1049626800,
        1052042400,
        1081076400,
        1083492000,
        1112526000,
        1114941600,
        1143975600,
        1146391200,
        1173610800,
        1194170400,
        1205060400,
        1225620000,
    ];
    public const WALL_OFFSETS = [
        53927,
        -32473,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -25200,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
        -28800,
        -32400,
    ];
    public const LAST_RULES = [
        [
            'month' => 3,
            'dayOfMonth' => 8,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -32400,
            'offsetBefore' => -32400,
            'offsetAfter' => -28800,
        ],
        [
            'month' => 11,
            'dayOfMonth' => 1,
            'dayOfWeek' => 0,
            'time' => 7200,
            'timeEndOfDay' => false,
            'standardOffset' => -32400,
            'offsetBefore' => -28800,
            'offsetAfter' => -32400,
        ],
    ];
}