<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NukeSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('country_item')->delete();
        \DB::table('countries')->delete();
        \DB::table('provinces')->delete();
        \DB::table('province_levels')->delete();
        \DB::table('religions')->delete();
        \DB::table('items')->delete();
        \DB::table('terrains')->delete();
        \DB::table('regions')->delete();
    }
}
