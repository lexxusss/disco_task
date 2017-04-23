<?php

namespace App\Events\DancesTypes;


use App\Events\Dance;
use App\Listeners\Disco\Dances\Motion;

class Drink extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::LISTEN);
    }
}
