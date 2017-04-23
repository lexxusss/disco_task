<?php

namespace App\Events\DancesTypes;


use App\Events\Dance;
use App\Listeners\Disco\Dances\Motion;

class Rock extends Dance
{
    public function __construct()
    {
        parent::__construct();

        $this->motions->push(Motion::MOTION_LEFT_HAND);
        $this->motions->push(Motion::MOTION_RIGHT_HAND);
        $this->motions->push(Motion::RUNNING);
        $this->motions->push(Motion::MOTION_HEAD);
        $this->motions->push(Motion::ROCKING);
    }
}
