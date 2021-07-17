<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
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

            $kategori = $faker->company;

            DB::table('kategoris')->insert([

                'nama' => $kategori,
                'slug' => Str::slug($kategori,'-'),
                'image' => $faker->image(public_path('images'),400,200, 'cats', false),
                'status' => $faker->numberBetween(0,1),
                
            ]);
        };
    }
}
