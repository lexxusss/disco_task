<?php

namespace App\Listeners\Disco\Dances;


class Motion
{
    const MOTION_HEAD = 'moving the head';
    const MOTION_RIGHT_HAND = 'moving right hand';
    const MOTION_LEFT_HAND = 'moving left hand';
    const MOTION_RIGHT_LEG = 'moving right leg';
    const MOTION_LEFT_LEG = 'moving left leg';
    const CIRCULAR_MOTION = 'rotating and turning around';
    const RUNNING = 'running away';
    const JUMPING = 'jumping';
    const JUMPING_ON_THE_HANDS = 'jumping on the hands';
    const MOON_WALK = 'making moonwalk like Michael Jackson';
    const SOMERSAULT = 'making somersault';
    const SIT_UPS = 'sitting-up';
    const ROCKING = 'rocking';
    const LISTEN = 'drinking the vodka in a bar';

    public static function get() {
        $oClass = new \ReflectionClass(__CLASS__);

        return $oClass->getConstants();
    }
}
