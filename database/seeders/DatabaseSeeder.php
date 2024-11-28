<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call(NukeSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(TerrainsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(ProvinceLevelsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CountryItemTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BattlesTableSeeder::class);
        $this->call(BattlefieldsTableSeeder::class);
    }
}
