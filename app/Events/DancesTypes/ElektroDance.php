<?php

namespace App\Events\DancesTypes;


use App\Events\Dance;
use App\Listeners\Disco\Dances\Motion;

class ElektroDance extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::JUMPING);
        $this->motions->push(Motion::ROCKING);
        $this->motions->push(Motion::MOTION_RIGHT_LEG);
        $this->motions->push(Motion::MOTION_LEFT_LEG);
        $this->motions->push(Motion::MOTION_HEAD);
    }

}
