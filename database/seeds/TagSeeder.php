<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for($i = 1; $i <= 4; $i++){

            $tags = $faker->word;

            DB::table('tags')->insert([

                'nama' => $tags,
                'slug' => Str::slug($tags,'-'),
            ]);
        };
            
    }
}
