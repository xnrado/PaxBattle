<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('units')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 1,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 1,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            2 =>
                array (
                    'id' => 3,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 2,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            3 =>
                array (
                    'id' => 4,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 2,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            4 =>
                array (
                    'id' => 5,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 2,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 3,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            6 =>
                array (
                    'id' => 7,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 3,
                    'name' => 'Brygada',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '100',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'unit_template_id' => 2,
                    'origin_id' => 50,
                    'army_id' => 4,
                    'name' => 'Luki',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '50',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            8 =>
                array (
                    'id' => 9,
                    'unit_template_id' => 2,
                    'origin_id' => 50,
                    'army_id' => 4,
                    'name' => 'Luki',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '50',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            9 =>
                array (
                    'id' => 10,
                    'unit_template_id' => 2,
                    'origin_id' => 50,
                    'army_id' => 5,
                    'name' => 'Luki',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '50',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            10 =>
                array (
                    'id' => 11,
                    'unit_template_id' => 2,
                    'origin_id' => 50,
                    'army_id' => 5,
                    'name' => 'Luki',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '50',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            11 =>
                array (
                    'id' => 12,
                    'unit_template_id' => 1,
                    'origin_id' => 50,
                    'army_id' => 5,
                    'name' => 'Bandyci',
                    'left_movement' => '2',
                    'is_visible' => '1',
                    'manpower' => '50',
                    'is_conscripted' => '0',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));
    }
}
