<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $genres = ['Action', 'Comedy', 'Drama', 'Fantasy', 'Romance', 'Thriller', 'Horror'];
    
        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre,
            ]);
        }
    }
}
