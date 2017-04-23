<?php

namespace App\Events\DancesTypes;


use App\Events\Dance;
use App\Listeners\Disco\Dances\Motion;

class HipHop extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::JUMPING_ON_THE_HANDS);
        $this->motions->push(Motion::SOMERSAULT);
        $this->motions->push(Motion::JUMPING);
        $this->motions->push(Motion::MOON_WALK);
        $this->motions->push(Motion::SIT_UPS);
    }
}
