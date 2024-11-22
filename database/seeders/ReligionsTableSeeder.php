<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('religions')->delete();

        \DB::table('religions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Kult Smoka',
                'slug' => 'kult-smoka',
                'head' => NULL,
                'province_id' => NULL,
                'color' => '7F1B10',
                'bio_url' => 'https://discord.com/channels/917078941213261914/1064218080244400269/1064256795788452011',
                'image' => 'https://i.imgur.com/AESlTpx.png',
                'credo' => NULL,
                'credo_image' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
