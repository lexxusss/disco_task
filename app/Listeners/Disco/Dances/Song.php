<?php
namespace App\Listeners\Disco\Dances;


class Song
{
    var $track;

    function __construct($track)
    {
        $this->track = $track;
    }
}
