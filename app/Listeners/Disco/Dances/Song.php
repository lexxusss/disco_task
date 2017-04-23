<?php
namespace App\Listeners\Disco\Dances;


class Song
{
    var $track;

    public function __construct($track)
    {
        $this->track = $track;
    }
}
