<?php

namespace App\Listeners\Disco\Dances\DancesTypes;


use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

abstract class Dance
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $motions;

    public function __construct()
    {
        $this->motions = new Collection();
    }

    public function __toString()
    {
        return $this->motions->implode(', ');
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
