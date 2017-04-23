<?php

namespace App\Listeners\Disco\Dances;


use Illuminate\Support\Collection;

class Tracks
{
    const ALL = [
        ['id' => 1, 'path' => 'https://youtube.com/embed/Y2Ta0qCG8No?autoplay=1', 'title' => 'Elton John - Crocodile Rock', 'types' => [MusicType::POP]],
        ['id' => 2, 'path' => 'https://youtube.com/embed/YqeW9_5kURI?autoplay=1', 'title' => 'Major Lazer & DJ Snake - Lean On', 'types' => [MusicType::ELEKTRO_DANCE, MusicType::POP]],
        ['id' => 3, 'path' => 'https://youtube.com/embed/7pOr3dBFAeY?autoplay=1', 'title' => 'Scorpions - Still loving you', 'types' => [MusicType::ROCK]],
        ['id' => 4, 'path' => 'https://youtube.com/embed/rmIJuxzUF3o?autoplay=1', 'title' => 'Грибы - Между нами тает лед', 'types' => [MusicType::HIP_HOP, MusicType::POP, MusicType::ELEKTRO_DANCE]],
        ['id' => 5, 'path' => 'https://youtube.com/embed/oNWOC_Pvo4w?autoplay=1', 'title' => 'Ofenbach - Be Mine', 'types' => [MusicType::ELEKTRO_DANCE]],
        ['id' => 6, 'path' => 'https://youtube.com/embed/9bZkp7q19f0?autoplay=1', 'title' => 'Psy - Gangnam style', 'types' => [MusicType::POP, MusicType::ELEKTRO_DANCE]],
        ['id' => 7, 'path' => 'https://youtube.com/embed/tJ7JcweIOZ4?autoplay=1', 'title' => 'Время и Стекло - На Стиле', 'types' => [MusicType::HIP_HOP, MusicType::POP]],
        ['id' => 8, 'path' => 'https://youtube.com/embed/u0pmV7GoTjc?autoplay=1', 'title' => 'David Guetta, Cedric Gervais & Chris Willis - Would I Lie To You', 'types' => [MusicType::ELEKTRO_DANCE, MusicType::HIP_HOP]],
        ['id' => 9, 'path' => 'https://youtube.com/embed/y2fNVztaC58?autoplay=1', 'title' => 'Руки Вверх ! - Когда мы были молодыми', 'types' => [MusicType::DRINK]],
        ['id' => 10, 'path' => 'https://youtube.com/embed/5dmQ3QWpy1Q?autoplay=1', 'title' => 'Linkin Park (feat. Kiiara) - Heavy', 'types' => [MusicType::ROCK, MusicType::POP]],
    ];

    public static function get($key = null)
    {
        $tracks = (new Collection(self::ALL))->keyBy('id');

        if (!$key) {
            if ($key === 0) {
                return $tracks->random();
            }

            return $tracks;
        }

        return $tracks->get($key);
    }

    public static function musicTypes($trackId)
    {
        $track = self::get($trackId);
        array_walk($track['types'], function (&$type) {$type = class_basename($type);});

        return join(', ', $track['types']);
    }

    public static function count()
    {
        return count(self::ALL);
    }
}
