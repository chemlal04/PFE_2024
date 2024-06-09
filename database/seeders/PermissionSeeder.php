<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Define your permissions here
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-vol',
            'edit-vol',
            'delete-vol',
            'create-hotel',
            'edit-hotel',
            'delete-hotel',
            'create-transport',
            'edit-transport',
            'delete-transport',
            'display-vol'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
