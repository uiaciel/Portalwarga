<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Artikel::class, function (Faker $faker) {

    $judul = $faker->sentences(3,true);
    $slug = Str::slug($judul,'-');

    return [
        'id_user' => factory(App\User::class),
                'judul' => $judul,
                'slug' => $slug,
                'detail' => $faker->paragraph,
                'image' => $faker->image(public_path('images'),640,480),
                'id_kategori' => $faker->numberBetween(1,4),
                'status' => $faker->numberBetween(0,1),
                'headline' => $faker->numberBetween(0,1),
    ];
});
