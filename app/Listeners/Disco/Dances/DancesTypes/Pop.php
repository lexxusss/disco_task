<?php

namespace App\Listeners\Disco\Dances\DancesTypes;

use App\Listeners\Disco\Dances\Motion;

class Pop extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::MOTION_LEFT_LEG);
        $this->motions->push(Motion::MOTION_RIGHT_LEG);
        $this->motions->push(Motion::MOTION_LEFT_HAND);
        $this->motions->push(Motion::MOTION_RIGHT_HAND);
        $this->motions->push(Motion::CIRCULAR_MOTION);
        $this->motions->push(Motion::MOTION_HEAD);
    }
}
