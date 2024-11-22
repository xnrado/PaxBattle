<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('regions')->delete();

        \DB::table('regions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Triarii',
                'description' => 'Lorem Ipsum',
                'color' => '7E2413',
                'image' => 'triarii.png',
                'x_coordinate' => 1071,
                'y_coordinate' => 136,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Selawia',
                'description' => 'Lorem Ipsum',
                'color' => '7E3C5E',
                'image' => 'selawia.png',
                'x_coordinate' => 1052,
                'y_coordinate' => 233,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Pomerania',
                'description' => 'Lorem Ipsum',
                'color' => '542160',
                'image' => 'pomerania.png',
                'x_coordinate' => 1136,
                'y_coordinate' => 494,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Acritenia',
                'description' => 'Lorem Ipsum',
                'color' => '55304C',
                'image' => 'acritenia.png',
                'x_coordinate' => 1142,
                'y_coordinate' => 677,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Wyspy Hogena',
                'description' => 'Lorem Ipsum',
                'color' => 'A91B25',
                'image' => 'wyspy_hogena.png',
                'x_coordinate' => 1429,
                'y_coordinate' => 758,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Jaraw',
                'description' => 'Lorem Ipsum',
                'color' => '7F87BD',
                'image' => 'jaraw.png',
                'x_coordinate' => 1176,
                'y_coordinate' => 865,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Algreb',
                'description' => 'Lorem Ipsum',
                'color' => 'A93CD4',
                'image' => 'algreb.png',
                'x_coordinate' => 1326,
                'y_coordinate' => 1002,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Tarnor',
                'description' => 'Lorem Ipsum',
                'color' => 'A921E3',
                'image' => 'tarnor.png',
                'x_coordinate' => 1206,
                'y_coordinate' => 1284,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Meridiana',
                'description' => 'Lorem Ipsum',
                'color' => '7F24B3',
                'image' => 'meridiana.png',
                'x_coordinate' => 1111,
                'y_coordinate' => 1112,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Anichrima',
                'description' => 'Lorem Ipsum',
                'color' => '011B32',
                'image' => 'anichrima.png',
                'x_coordinate' => 977,
                'y_coordinate' => 949,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Koirdea',
                'description' => 'Lorem Ipsum',
                'color' => 'AAA539',
                'image' => 'koirdea.png',
                'x_coordinate' => 940,
                'y_coordinate' => 1407,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Galindis',
                'description' => 'Lorem Ipsum',
                'color' => '80510E',
                'image' => 'galindis.png',
                'x_coordinate' => 688,
                'y_coordinate' => 1401,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Drachen',
                'description' => 'Lorem Ipsum',
                'color' => '016628',
                'image' => 'drachen.png',
                'x_coordinate' => 678,
                'y_coordinate' => 1195,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Szrimp',
                'description' => 'Lorem Ipsum',
                'color' => '557E88',
                'image' => 'szrimp.png',
                'x_coordinate' => 468,
                'y_coordinate' => 1112,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Wielki Las',
                'description' => 'Lorem Ipsum',
                'color' => '2BAB03',
                'image' => 'wielki_las.png',
                'x_coordinate' => 717,
                'y_coordinate' => 994,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Kizgad',
                'description' => 'Lorem Ipsum',
                'color' => '01450F',
                'image' => 'kizgad.png',
                'x_coordinate' => 926,
                'y_coordinate' => 793,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Wielki Łan',
                'description' => 'Lorem Ipsum',
                'color' => '2B965D',
                'image' => 'wielki_lan.png',
                'x_coordinate' => 598,
                'y_coordinate' => 741,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Pretynia',
                'description' => 'Lorem Ipsum',
                'color' => '543C24',
                'image' => 'pretynia.png',
                'x_coordinate' => 719,
                'y_coordinate' => 395,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Anestan',
                'description' => 'Lorem Ipsum',
                'color' => '2A2A21',
                'image' => 'anestan.png',
                'x_coordinate' => 593,
                'y_coordinate' => 533,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Przylądek Gregora',
                'description' => 'Lorem Ipsum',
                'color' => '805A40',
                'image' => 'przyladek_gregora.png',
                'x_coordinate' => 327,
                'y_coordinate' => 381,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Jotunai',
                'description' => 'Lorem Ipsum',
                'color' => '556638',
                'image' => 'jotunai.png',
                'x_coordinate' => 307,
                'y_coordinate' => 675,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Morze Kupców',
                'description' => 'Lorem Ipsum',
                'color' => '43DEFC',
                'image' => 'morze_kupcow.png',
                'x_coordinate' => 1399,
                'y_coordinate' => 82,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Kessel',
                'description' => 'Lorem Ipsum',
                'color' => '78FBFB',
                'image' => 'kessel.png',
                'x_coordinate' => 1484,
                'y_coordinate' => 554,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Orelaw',
                'description' => 'Lorem Ipsum',
                'color' => '4ACAFC',
                'image' => 'orelaw.png',
                'x_coordinate' => 1522,
                'y_coordinate' => 1314,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Niebieska Zatoka',
                'description' => 'Lorem Ipsum',
                'color' => '64BEED',
                'image' => 'niebieska_zatoka.png',
                'x_coordinate' => 1195,
                'y_coordinate' => 1510,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Morze Południowe',
                'description' => 'Lorem Ipsum',
                'color' => '34FDFD',
                'image' => 'morze_poludniowe.png',
                'x_coordinate' => 253,
                'y_coordinate' => 1415,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Wybrzeże Zdrajców',
                'description' => 'Lorem Ipsum',
                'color' => '58FCFC',
                'image' => 'wybrzeze_zdrajcow.png',
                'x_coordinate' => 190,
                'y_coordinate' => 809,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Spopielone Wody',
                'description' => 'Lorem Ipsum',
                'color' => '31CBCB',
                'image' => 'spopielone_wody.png',
                'x_coordinate' => 447,
                'y_coordinate' => 102,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Melir',
                'description' => 'Lorem Ipsum',
                'color' => '83D6F0',
                'image' => 'melir.png',
                'x_coordinate' => 719,
                'y_coordinate' => 820,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Góry',
                'description' => 'Lorem Ipsum',
                'color' => '000000',
                'image' => 'gory.png',
                'x_coordinate' => 0,
                'y_coordinate' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
