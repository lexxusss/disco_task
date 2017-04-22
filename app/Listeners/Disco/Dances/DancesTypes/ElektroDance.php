<?php

namespace App\Listeners\Disco\Dances\DancesTypes;


use App\Listeners\Disco\Dances\Motion;

class ElektroDance extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::JUMPING);
        $this->motions->push(Motion::RUNNING);
        $this->motions->push(Motion::ROCKING);
        $this->motions->push(Motion::MOTION_RIGHT_LEG);
        $this->motions->push(Motion::MOTION_LEFT_LEG);
        $this->motions->push(Motion::MOTION_HEAD);
    }

}
