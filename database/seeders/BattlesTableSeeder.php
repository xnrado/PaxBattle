<?php

namespace Database\Seeders;

use App\Models\BattleCountryUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class BattlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('factions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Armia Wschód',
                    'color' => '2A6B11',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Armia Czerwona',
                    'color' => '2A6B11',
                ),
        ));

        \DB::table('battles')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Bitwa Nordycka',
                    'slug' => 'bitwa-nordycka',
                    'description' => 'Decydujące starcie stoczone 14 października 1066 podczas inwazji Normanów na Anglię pomiędzy wojskami Normanów pod dowództwem Wilhelma Zdobywcy a pospolitym ruszeniem anglosaskim i gwardii dowodzonymi przez króla Harolda II.',
                    'image' => 'img/battles/nord.jpg',
                    'province_id' => 50,
                    'x_size' => '10',
                    'y_size' => '10',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Bitwa Kizgadzka',
                    'slug' => 'bitwa-kizgadzka',
                    'description' => 'Starcie zbrojne, które miało miejsce 10 listopada 1444 roku między oddziałami polsko-węgierskimi oraz innymi wojskami koalicji antytureckiej.',
                    'image' => 'img/battles/pagan.webp',
                    'province_id' => 50,
                    'x_size' => '50',
                    'y_size' => '100',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));


        $bcu = new BattleCountryUser([
            'user_id' => 381473729290698752,
            'country_id' => 1,
            'battle_id' => 1,
            'faction_id' => null,
            'is_active' => true,
        ]);
        $bcu->save();
        $bcu = new BattleCountryUser([
            'user_id' => 381473729290698752,
            'country_id' => 1,
            'battle_id' => 2,
            'faction_id' => null,
            'is_active' => true,
        ]);
        $bcu->save();
        $bcu = new BattleCountryUser([
            'user_id' => 751909872890675291,
            'country_id' => 2,
            'battle_id' => 2,
            'faction_id' => null,
            'is_active' => true,
        ]);
        $bcu->save();


    }
}
