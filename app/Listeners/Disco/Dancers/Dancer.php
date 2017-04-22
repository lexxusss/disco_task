<?php

namespace App\Listeners\Disco\Dancers;

use App\Listeners\Disco\Dances\DancesTypes\Dance;

abstract class Dancer implements Dancing
{
    protected $name;
    protected $dance;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        $this->name = class_basename(get_called_class());
    }

    /**
     * Dance action
     *
     * @return string
     */
    public function dance()
    {
        return $this->name . ' ' . $this->dance;
    }

    /**
     * Handle the event.
     *
     * @param Dance $event
     */
    public function handle(Dance $event)
    {
        $this->dance = new $event();

        $this->dance();
    }
}
