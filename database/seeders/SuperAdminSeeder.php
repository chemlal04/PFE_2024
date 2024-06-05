<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the super admin user already exists
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin2024@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );

        // Check if the team already exists for this user
        $team = Team::firstOrCreate(
            [
                'user_id' => $superAdmin->id,
                'name' => $superAdmin->name . "'s Team",
                'personal_team' => true,
            ]
        );

        // Set the current team for the user if not already set
        if (!$superAdmin->current_team_id) {
            $superAdmin->current_team_id = $team->id;
            $superAdmin->save();
        }

        // Check if the super-admin role already exists
        $role = Role::firstOrCreate(['name' => 'super-admin']);
        $allPermissions = Permission::all();
        foreach ($allPermissions as $permission) {
            $role->givePermissionTo($permission);
        }

        // Assign the role to the super admin if not already assigned
         

        // Custom role assignment to include team_id
      
        $superAdmin->assignRole($role);
        // Optionally, add specific permissions to the role if needed
        // Example: $role->givePermissionTo('some-permission');
    }
}
