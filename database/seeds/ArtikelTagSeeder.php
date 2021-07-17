<?php

use Illuminate\Database\Seeder;

class ArtikelTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
            DB:table('tags')->insert([

                'artikel_id' => $faker->numberBetween(1,50),
                'tag_id' => $faker->numberBetween(1,4),
            ])
        }
    }
}
