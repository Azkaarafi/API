<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class FilmSeeder extends Seeder
{
    public function run()
    {
        $films = [
            [
                'title' => 'One Piece',
                'synopsis' => 'Seorang bajak laut bernama Luffy berpetualang mencari harta karun legendaris.',
                'images' => json_encode(['onepiece1.jpg', 'onepiece2.jpg']),
                'status' => 'airing',
                'total_episodes' => 1000,
                'release_date' => '1999-10-20',
                'genres' => ['Action', 'Adventure', 'Fantasy']
            ],
            [
                'title' => 'Attack on Titan',
                'synopsis' => 'Umat manusia melawan raksasa untuk bertahan hidup.',
                'images' => json_encode(['aot1.jpg']),
                'status' => 'finished_airing',
                'total_episodes' => 87,
                'release_date' => '2013-04-07',
                'genres' => ['Action', 'Drama', 'Thriller']
            ],
        ];

        foreach ($films as $data) {
            $film = Film::create([
                'title' => $data['title'],
                'synopsis' => $data['synopsis'],
                'images' => $data['images'],
                'status' => $data['status'],
                'total_episodes' => $data['total_episodes'],
                'release_date' => $data['release_date'],
            ]);

            $genreIds = Genre::whereIn('name', $data['genres'])->pluck('id');
            $film->genres()->attach($genreIds);
        }
    }
}
