<?php

namespace App\Listeners\Disco\Dances;


use App\Listeners\Disco\Dances\DancesTypes\ElektroDance;
use App\Listeners\Disco\Dances\DancesTypes\HipHop;
use App\Listeners\Disco\Dances\DancesTypes\Listen;
use App\Listeners\Disco\Dances\DancesTypes\Pop;
use App\Listeners\Disco\Dances\DancesTypes\Rock;

class MusicType
{
    const HIP_HOP = HipHop::class;
    const POP = Pop::class;
    const ELEKTRO_DANCE = ElektroDance::class;
    const ROCK = Rock::class;
    const LISTEN = Listen::class;
}
