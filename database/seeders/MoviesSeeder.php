<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'movie_name' => 'Wonder Woman',
                'actor_id' => 2,
            ],
            [
                'movie_name' => 'Pursuit of Happiness',
                'actor_id' => 11,
            ],
            [
                'movie_name' => 'Captain America',
                'actor_id' => 22,
            ],
            [
                'movie_name' => 'Murder Mystrey',
                'actor_id' => 14,
            ],
            [
                'movie_name' => 'Jumanji',
                'actor_id' => 9,
            ],
        ];
        Movie::insert($movies);
    }
}
