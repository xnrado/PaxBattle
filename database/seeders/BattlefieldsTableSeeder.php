<?php

namespace Database\Seeders;

use App\Models\Battle;
use App\Models\User;
use Illuminate\Database\Seeder;

class BattlefieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    const top = 0;
    const left = 0;


    public function run()
    {
        \DB::table('battlefield_nodes')->delete();

        foreach (Battle::all() as $battle) {
            $hexes = array();
            $bottom = $battle->y_size - 1;
            $right = $battle->x_size - 1;
            $i = 0;
            for($r = self::top; $r <= $bottom; $r++) {
                $r_offset = floor($r / 2.0);
                for ($q = self::left - $r_offset; $q <= $right - $r_offset; $q++) {
                    $hexes[$i] = array(
                        'q' => $q,
                        'r' => $r,
                        's' => -$q-$r,
                        'battle_id' => $battle->id,
                        'terrain_id' => rand(1, 6)
                    );
                    $i ++;
                }
            }

            foreach (array_chunk($hexes, 1000) as $chunk) {
                \DB::table('battlefield_nodes')->insert($chunk);
            }
        }
    }
}
