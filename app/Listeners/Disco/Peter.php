<?php

namespace App\Listeners\Disco;

use App\Events\DiscoEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Peter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
