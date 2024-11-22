<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TerrainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('terrains')->delete();

        \DB::table('terrains')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Niziny',
                'description' => 'Lorem Ipsum',
                'color' => '5AEB1B',
                'image' => 'niziny.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Pola',
                'description' => 'Lorem Ipsum',
                'color' => 'B3FF40',
                'image' => 'pola.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Puszcza',
                'description' => 'Lorem Ipsum',
                'color' => '124A09',
                'image' => 'puszcza.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Las',
                'description' => 'Lorem Ipsum',
                'color' => '299B16',
                'image' => 'las.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Dżungla',
                'description' => 'Lorem Ipsum',
                'color' => '62A312',
                'image' => 'dzungla.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Wyżyny',
                'description' => 'Lorem Ipsum',
                'color' => 'B08115',
                'image' => 'wyzyny.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Góry',
                'description' => 'Lorem Ipsum',
                'color' => '691804',
                'image' => 'gory.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Wybrzeża',
                'description' => 'Lorem Ipsum',
                'color' => 'E8AC66',
                'image' => 'wybrzeza.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Morza',
                'description' => 'Lorem Ipsum',
                'color' => '446BA3',
                'image' => 'morza.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Oceany',
                'description' => 'Lorem Ipsum',
                'color' => '294062',
                'image' => 'oceany.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Step',
                'description' => 'Lorem Ipsum',
                'color' => '93C853',
                'image' => 'step.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Wasteland',
                'description' => 'Lorem Ipsum',
                'color' => '000000',
                'image' => 'wasteland.png',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
