<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;


class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = [
            [
                'id' => 22,
                'name' => 'Chris Evans',
            ],
            [
                'id' => 11,
                'name' => 'Will Smith',
            ],
            [
                'id' => 2,
                'name' => 'Gal Gadot',
            ],
            [
                'id' => 9,
                'name' => 'Dwayne Johnson',
            ],
            [
                'id' => 14,
                'name' => 'Jennifer Aniston',
            ],
        ];
        Actor::insert($actors);
    }
}
