<?php

namespace App\Providers;

use App\Events\DiscoEvent;
use App\Listeners\Disco\Alex;
use App\Listeners\Disco\Ivan;
use App\Listeners\Disco\Mary;
use App\Listeners\Disco\Peter;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        DiscoEvent::class => [
            Mary::class,
            Ivan::class,
            Peter::class,
            Alex::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
