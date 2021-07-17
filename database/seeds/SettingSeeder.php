<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('settings')->insert([
            'site_name' => 'Portal Warga',
            'description' => 'Website nya Warga Kekinian',
            'keywords' => 'media warga, warga, portal warga, website warga, warga kekinian',
            'footer_right' => 'uiaciel.com',
            'footer_left' => 'dibuat tahun 2021',
           
        ]);
    }
}
