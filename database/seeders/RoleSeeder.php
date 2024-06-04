<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $adminVolRole = Role::create(['name' => 'admin_vol']);
        $adminHotelRole = Role::create(['name' => 'admin_hotel']);
        $adminTransportRole = Role::create(['name' => 'admin_transport']);

        // Fetch all permissions
        $allPermissions = Permission::all();

        // Assign all permissions to super_admin role
        foreach ($allPermissions as $permission) {
            $superAdminRole->givePermissionTo($permission);
        }

        // Assign specific permissions to admin_vol role
        $adminVolPermissions = [
            'create-vol',
            'edit-vol',
            'delete-vol',
        ];
        foreach ($adminVolPermissions as $permission) {
            $adminVolRole->givePermissionTo($permission);
        }

        // Assign specific permissions to admin_hotel role
        $adminHotelPermissions = [
            'create-hotel',
            'edit-hotel',
            'delete-hotel',
        ];
        foreach ($adminHotelPermissions as $permission) {
            $adminHotelRole->givePermissionTo($permission);
        }

        // Assign specific permissions to admin_transport role
        $adminTransportPermissions = [
            'create-transport',
            'edit-transport',
            'delete-transport',
        ];
        foreach ($adminTransportPermissions as $permission) {
            $adminTransportRole->givePermissionTo($permission);
        }
    }
}
