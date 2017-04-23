<?php

namespace App\Listeners\Disco\Dancers;


interface Dancing
{

    /**
     * Dance action
     *
     * @param string $name
     * @param array $motions
     * @return string
     */
    static function dancing($name, $motions);
}
