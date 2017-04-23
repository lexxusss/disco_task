<?php

namespace App\Events;

use App\Listeners\Disco\Dances\MusicType;
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

    public static $dancers = [];

    /**
     * DiscoEvent constructor.
     * Create a new event instance.
     *
     * @param $song
     */
    public function __construct(Song $song)
    {
        $this->currentSong = $song;

        $trackTypes = $this->currentSong->track['types'];
        foreach ($trackTypes as $type) {
            if ($type !== MusicType::DRINK) {
                event(new $type);
            }
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
