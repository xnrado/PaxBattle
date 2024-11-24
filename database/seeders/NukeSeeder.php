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

//        $this->call(NukeSeeder::class);
//        $this->call(RegionsTableSeeder::class);
//        $this->call(TerrainsTableSeeder::class);
//        $this->call(ItemsTableSeeder::class);
//        $this->call(ReligionsTableSeeder::class);
//        $this->call(ProvinceLevelsTableSeeder::class);
//        $this->call(ProvincesTableSeeder::class);
//        $this->call(CountriesTableSeeder::class);
//        $this->call(CountryItemTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
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
