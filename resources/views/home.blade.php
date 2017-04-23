@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h2>Current track:</h2>
                <h4>{{ $currentTrack['title'] }}</h4>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $currentTrack['path'] }}"></iframe>
                </div>
            </div>
            <div class="col-sm-6">


                <h2>Tracks:</h2>
                <ul>
                    @foreach($tracks as $track)
                        <li class="{{ $track['id'] == $currentTrack['id'] ? 'bg-danger' : '' }}">
                            <a href="{{ route('disco', ['track_id' => $track['id']]) }}">{{ $track['title'] }} ({{ \Tracks::musicTypes($track['id']) }})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <h2>Dancers:</h2>
                <ul>
                    @foreach($dancers as $dancerName => $motions)
                        <li>{!! \Dancer::dancing($dancerName, $motions) !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
