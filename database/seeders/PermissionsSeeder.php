<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use function App\get_guild;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $player = Role::create(['name' => 'player']);

        $create_battles = Permission::create(['name' => 'create_battles']);
        $see_all_battles = Permission::create(['name' => 'see_all_battles']);

        $admin->givePermissionTo($create_battles);
        $admin->givePermissionTo($see_all_battles);

        $owner_id = get_guild(env('DISCORD_GUILD_ID'))['owner_id'];

        $owner = User::query()->where('id', $owner_id)->first();
        $owner->assignRole('admin');
    }
}
