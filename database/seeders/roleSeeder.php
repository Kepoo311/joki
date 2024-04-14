<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            'name' => 'admin',
        ]);
        $role_worker = Role::create([
            'name' => 'worker',
        ]);
        $role_user = Role::create([
            'name' => 'user',
        ]);

        $permis = Permission::create([
            'name' => 'view_dash_admin'
         ]);
        $permis2 = Permission::create([
            'name' => 'view_dash_worker'
         ]);

         $role_admin->givePermissionTo($permis);
         $role_admin->givePermissionTo($permis2);
         $role_worker->givePermissionTo($permis2);

         $user2 = User::find(6);
         $user2->assignRole(['admin']);
         $user2 = User::find(1);
         $user2->assignRole(['worker']);
    }
}
