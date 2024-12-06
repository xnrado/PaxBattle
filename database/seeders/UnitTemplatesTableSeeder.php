<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('unit_templates')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Topornicy',
                    'description' => 'Topornicy',
                    'image' => 'img/units/Aj_baat.png',
                    'map_movement' => 2,
                    'battle_movement' => 2,
                    'max_manpower' => 100,
                    'range' => 1,
                    'weapon_skill' => '{"A": "1", "B": "2"}',
                    'ballistic_skill' => '{"A": "1", "B": "2"}',
                    'weapon_attacks' => 1,
                    'ballistic_attacks' => 1,
                    'weapon_strength' => '{"A": "1", "B": "2"}',
                    'ballistic_strength' => '{"A": "1", "B": "2"}',
                    'toughness' => '{"A": "1", "B": "2"}',
                    'type' => 'A',
                    'vision_range' => 2,
                    'is_singular' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Łucznicy',
                    'description' => 'Łucznicy',
                    'image' => 'img/units/Aj_jaatsab.png',
                    'map_movement' => 2,
                    'battle_movement' => 2,
                    'max_manpower' => 100,
                    'range' => 1,
                    'weapon_skill' => '{"A": "1", "B": "2"}',
                    'ballistic_skill' => '{"A": "1", "B": "2"}',
                    'weapon_attacks' => 1,
                    'ballistic_attacks' => 1,
                    'weapon_strength' => '{"A": "1", "B": "2"}',
                    'ballistic_strength' => '{"A": "1", "B": "2"}',
                    'toughness' => '{"A": "1", "B": "2"}',
                    'type' => 'B',
                    'vision_range' => 2,
                    'is_singular' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));
    }
}
