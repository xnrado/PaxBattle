<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Karbadia',
                'slug' => 'karbadia',
                'description' => 'Kraj Konrada',
                'color' => '2A6B11',
                'ruler' => 'Wysoki król Halmund III',
                'government' => 'Monarchia feudalna',
                'religion_id' => 1,
                'province_id' => 55,
                'bio_url' => 'https://docs.google.com/document/d/1ZK7jFEeftuXVMJSBaW4xe8LCdoDRAqMLc-dL8MVKrmg/edit?usp=sharing',
                'image' => 'karbadia.png',
                'credo' => '"Lojalność albo śmierć."',
                'credo_image' => 'https://i.imgur.com/cSrYqo7.png',
                'channel' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
                'is_visible' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Neuord Drakonis',
                'slug' => 'neuord-drakonis',
                'description' => 'Kraj KrysPIN\'a',
                'color' => '7F1B10',
                'ruler' => 'Mistrz Dogar Heudhauer ',
                'government' => 'Teokracja zakonna',
                'religion_id' => 1,
                'province_id' => 321,
                'bio_url' => 'https://imgur.com/22cVGdy',
                'image' => 'neuord.png',
                'credo' => NULL,
                'credo_image' => NULL,
                'channel' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
                'is_visible' => 1,
            ),
        ));


    }
}
