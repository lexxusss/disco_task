<?php

namespace App\Providers;

use App\Events\DiscoEvent;
use App\Listeners\Disco\Dancers\Alex;
use App\Listeners\Disco\Dancers\Ivan;
use App\Listeners\Disco\Dancers\John;
use App\Listeners\Disco\Dancers\Mary;
use App\Listeners\Disco\Dancers\Peter;
use App\Listeners\Disco\Dancers\SashaGrey;
use App\Events\DancesTypes\ElektroDance;
use App\Events\DancesTypes\HipHop;
use App\Events\DancesTypes\Drink;
use App\Events\DancesTypes\Pop;
use App\Events\DancesTypes\Rock;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        DiscoEvent::class => [],

        HipHop::class => [
            Mary::class,
            SashaGrey::class,
            Alex::class,
        ],
        Pop::class => [
            Peter::class,
            SashaGrey::class,
            Ivan::class,
            Mary::class,
        ],
        Rock::class => [
            Alex::class,
            Peter::class,
            Ivan::class,
        ],
        ElektroDance::class => [
            John::class,
            SashaGrey::class,
            Alex::class,
            Ivan::class,
        ],

        Drink::class => [
            SashaGrey::class,
            Alex::class,
            Peter::class,
            Mary::class,
            John::class,
            Ivan::class,
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
