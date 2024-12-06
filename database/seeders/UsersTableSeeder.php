<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 381473729290698752,
                    'username' => 'xnrad',
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 751909872890675291,
                    'username' => 'darnxx',
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));


    }
}
