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
        $resolver = $this->resolver;
        return !empty($resolver::$dancerMotions[Motion::LISTEN]);
    }

    protected function stopDrink()
    {
        $resolver = $this->resolver;
        unset($resolver::$dancerMotions[Motion::LISTEN]);
    }

    protected function dance()
    {
        $resolver = $this->resolver;
        $motions = $this->dance->getMotions();
        foreach ($motions as $motion) {
            $resolver::$dancerMotions[$motion] = $motion;
        }

        DiscoEvent::$dancers[$resolver] = $resolver::$dancerMotions;
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