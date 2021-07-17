<?php

use Illuminate\Database\Seeder;
use App\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $count = 3;
        factory(Artikel::class, $count)->create();
    }
}
