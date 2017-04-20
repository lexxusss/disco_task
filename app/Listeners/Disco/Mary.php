<?php

namespace App\Listeners\Disco;

use App\Events\DiscoEvent;
use App\Listeners\Disco\Abilities\HipHop;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mary extends Dancer
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        $this->name = 'Mary';
        $this->dance = new HipHop();
    }

    /**
     * Handle the event.
     *
     * @param  DiscoEvent  $event
     * @return void
     */
    public function handle(DiscoEvent $event)
    {
        //
    }
}
