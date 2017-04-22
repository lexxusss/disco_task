<?php

namespace App\Events;

use App\Listeners\Disco\Dances\Song;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DiscoEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $currentSong;

    /**
     * DiscoEvent constructor.
     * Create a new event instance.
     *
     * @param $song
     */
    public function __construct(Song $song)
    {
        $this->currentSong = $song;

        foreach ($this->currentSong->track['types'] as $type) {
            event(new $type);
        }
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
