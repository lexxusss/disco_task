<?php

namespace App\Listeners\Disco\Dancers;


use App\Events\Dance;
use App\Events\DiscoEvent;
use App\Listeners\Disco\Dances\Motion;

abstract class Dancer implements Dancing
{
    protected $resolver;
    protected $dance;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        $this->resolver = get_called_class();
    }

    protected function isDrinking()
    {
        return !empty(($this->resolver)::$dancerMotions[Motion::LISTEN]);
    }

    protected function stopDrink()
    {
        unset(($this->resolver)::$dancerMotions[Motion::LISTEN]);
    }

    protected function dance()
    {
        $motions = $this->dance->getMotions();
        foreach ($motions as $motion) {
            $this->resolver::$dancerMotions[$motion] = $motion;
        }

        DiscoEvent::$dancers[$this->resolver] = ($this->resolver)::$dancerMotions;
    }

    /**
     * Handle the event.
     *
     * @param Dance $event
     */
    public function handle(Dance $event)
    {
        $this->dance = new $event();

        if ($this->isDrinking()) {
            $this->stopDrink();
        }

        $this->dance();
    }

    public static function dancing($name, $motions)
    {
        return class_basename($name) . " is: <br/>" . join(", ", $motions);
    }
}
