<?php

namespace App\Listeners\Disco\Dances;


class Tracks
{
    public static $TRACKS = [
        ['title' => 'Elton John - Crocodile Rock', 'types' => [MusicType::POP]],
        ['title' => 'Major Lazer & DJ Snake - Lean On', 'types' => [MusicType::ELEKTRO_DANCE, MusicType::POP]],
        ['title' => 'Scorpions - Still loving you', 'types' => [MusicType::ROCK]],
        ['title' => 'Грибы - Между нами тает лед', 'types' => [MusicType::HIP_HOP, MusicType::POP]],
        ['title' => 'Ofenbach - Be Mine', 'types' => [MusicType::ELEKTRO_DANCE]],
        ['title' => 'Psy - Gangnam style', 'types' => [MusicType::POP, MusicType::ELEKTRO_DANCE]],
        ['title' => 'Время и Стекло - На Стиле', 'types' => [MusicType::HIP_HOP, MusicType::POP]],
        ['title' => 'David Guetta, Cedric Gervais & Chris Willis - Would I Lie To You', 'types' => [MusicType::ELEKTRO_DANCE, MusicType::HIP_HOP]],
        ['title' => 'Руки Вверх ! - Когда мы были молодыми', 'types' => [MusicType::LISTEN]],
        ['title' => 'Linkin Park (feat. Kiiara) - Heavy', 'types' => [MusicType::ROCK, MusicType::POP]],
    ];
}
