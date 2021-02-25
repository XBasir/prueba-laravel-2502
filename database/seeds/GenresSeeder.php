<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
          'category' =>	'Horror',
        ]);

        Genre::create([
           'category' =>	'Comedy',
        ]);

        Genre::create([
            'category' =>	'Documental',
        ]);

        Genre::create([
            'category' =>	'Action',
        ]);
    }
}
