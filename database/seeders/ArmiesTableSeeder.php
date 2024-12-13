<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('armies')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'order' => 1,
                    'name' => 'Armia K Zielona',
                    'country_id' => 1,
                    'province_id' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'order' => 2,
                    'name' => 'Armia K Czerwone',
                    'country_id' => 1,
                    'province_id' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            2 =>
                array (
                    'id' => 3,
                    'order' => 3,
                    'name' => 'Armia N Biała',
                    'country_id' => 2,
                    'province_id' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            3 =>
                array (
                    'id' => 4,
                    'order' => 4,
                    'name' => 'Armia N Czarna',
                    'country_id' => 2,
                    'province_id' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            4 =>
                array (
                    'id' => 5,
                    'order' => 5,
                    'name' => 'Armia N Zółta',
                    'country_id' => 2,
                    'province_id' => 50,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));
    }
}
