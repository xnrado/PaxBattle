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
                    'avatar' => 'ba0d656b47f5fccdb361414e2d5be5ed',
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 751909872890675291,
                    'username' => 'darnxx',
                    'avatar' => 'af17bc35844101fc5729aa9d1de0ed3b',
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));


    }
}
