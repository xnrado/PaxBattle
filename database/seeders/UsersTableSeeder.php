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


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 381473729290698752,
                    'username' => 'xnrad',
                    'global_name' => 'XnraD',
                    'discriminator' => 0,
                    'email' => 'xnrad123@gmail.com',
                    'avatar' => 'ba0d656b47f5fccdb361414e2d5be5ed',
                    'verified' => 1,
                    'banner' => NULL,
                    'banner_color' => NULL,
                    'accent_color' => NULL,
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'premium_type' => 0,
                    'public_flags' => 0,
                    'remember_token' => NULL,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            1 =>
                array (
                    'id' => 751909872890675291,
                    'username' => 'darnxx',
                    'global_name' => 'DarnX',
                    'discriminator' => 0,
                    'email' => 'xnrad321@gmail.com',
                    'avatar' => 'af17bc35844101fc5729aa9d1de0ed3b',
                    'verified' => 1,
                    'banner' => NULL,
                    'banner_color' => NULL,
                    'accent_color' => NULL,
                    'locale' => 'pl',
                    'mfa_enabled' => 0,
                    'premium_type' => 0,
                    'public_flags' => 0,
                    'remember_token' => NULL,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));


    }
}
