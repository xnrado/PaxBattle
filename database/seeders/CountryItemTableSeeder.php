<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_item')->delete();
        
        
        
    }
}