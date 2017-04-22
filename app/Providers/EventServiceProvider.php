<?php

namespace App\Providers;

use App\Events\DiscoEvent;
use App\Listeners\Disco\Dancers\Alex;
use App\Listeners\Disco\Dancers\Ivan;
use App\Listeners\Disco\Dancers\John;
use App\Listeners\Disco\Dancers\Mary;
use App\Listeners\Disco\Dancers\Nobody;
use App\Listeners\Disco\Dancers\Peter;
use App\Listeners\Disco\Dancers\SashaGrey;
use App\Listeners\Disco\Dances\DancesTypes\ElektroDance;
use App\Listeners\Disco\Dances\DancesTypes\HipHop;
use App\Listeners\Disco\Dances\DancesTypes\Listen;
use App\Listeners\Disco\Dances\DancesTypes\Pop;
use App\Listeners\Disco\Dances\DancesTypes\Rock;
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
            Peter::class,
        ],
        Pop::class => [
            Mary::class,
            Peter::class,
            Ivan::class,
        ],
        Rock::class => [
            John::class,
            Alex::class,
            Ivan::class,
        ],
        ElektroDance::class => [
            SashaGrey::class,
            Alex::class,
            Peter::class,
            Mary::class,
        ],
        Listen::class => [
            Nobody::class,
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
