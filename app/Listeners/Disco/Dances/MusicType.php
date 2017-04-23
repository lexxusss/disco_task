<?php

namespace App\Listeners\Disco\Dances;


use App\Events\DancesTypes\Drink;
use App\Events\DancesTypes\ElektroDance;
use App\Events\DancesTypes\HipHop;
use App\Events\DancesTypes\Pop;
use App\Events\DancesTypes\Rock;

class MusicType
{
    const HIP_HOP = HipHop::class;
    const POP = Pop::class;
    const ELEKTRO_DANCE = ElektroDance::class;
    const ROCK = Rock::class;
    const DRINK = Drink::class;

    public static function get() {
        $oClass = new \ReflectionClass(__CLASS__);

        return $oClass->getConstants();
    }
}
