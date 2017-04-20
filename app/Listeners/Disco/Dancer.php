<?php

namespace App\Listeners\Disco;


abstract class Dancer implements Dancing
{
    protected $name;
    protected $dance;

    public function dance()
    {
        return $this->name;
    }
}
