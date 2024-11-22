<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('province_levels')->delete();

        \DB::table('province_levels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'pops_limit' => 0,
                'pops_income' => 0,
                'building_limit' => 0,
                'gold_cost' => 0,
                'wood_cost' => 0,
                'ores_cost' => 0,
                'food_cost' => 0,
                'bricks_cost' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'pops_limit' => 5,
                'pops_income' => 1,
                'building_limit' => 7,
                'gold_cost' => 400,
                'wood_cost' => 5,
                'ores_cost' => 5,
                'food_cost' => 5,
                'bricks_cost' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'pops_limit' => 10,
                'pops_income' => 1,
                'building_limit' => 14,
                'gold_cost' => 250,
                'wood_cost' => 4,
                'ores_cost' => 2,
                'food_cost' => 4,
                'bricks_cost' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'pops_limit' => 15,
                'pops_income' => 2,
                'building_limit' => 20,
                'gold_cost' => 300,
                'wood_cost' => 4,
                'ores_cost' => 4,
                'food_cost' => 6,
                'bricks_cost' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'pops_limit' => 20,
                'pops_income' => 2,
                'building_limit' => 29,
                'gold_cost' => 450,
                'wood_cost' => 6,
                'ores_cost' => 4,
                'food_cost' => 8,
                'bricks_cost' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'pops_limit' => 25,
                'pops_income' => 3,
                'building_limit' => 34,
                'gold_cost' => 600,
                'wood_cost' => 6,
                'ores_cost' => 6,
                'food_cost' => 10,
                'bricks_cost' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
