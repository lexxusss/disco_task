<?php

namespace App\Http\Controllers;

use App\Events\DancesTypes\Drink;
use App\Events\DiscoEvent;
use App\Listeners\Disco\Dances\Song;
use App\Listeners\Disco\Dances\Tracks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tracks = Tracks::get();
        $currentTrack = Tracks::get($request->get('track_id', 0));

        event(new Drink());
        event(new DiscoEvent(new Song($currentTrack)));

        $dancers = DiscoEvent::$dancers;

        return view('home', compact('tracks', 'currentTrack', 'dancers'));
    }
}
