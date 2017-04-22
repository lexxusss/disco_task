<?php

namespace App\Listeners\Disco\Dances\DancesTypes;


use App\Listeners\Disco\Dances\Motion;

class Listen extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::LISTEN);
    }
}
