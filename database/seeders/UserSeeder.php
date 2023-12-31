<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::where('slug', 'super_admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => $superAdminRole->id,
            'name' => 'Super Admin',
            'email' => 'super.admin@mail.com',
            'password' => 'password',
            'status' => true,
        ]);
        $adminRole = Role::where('slug', 'admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => $adminRole->id,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'password',
            'status' => true,
        ]);

        // Create user
        $userRole = Role::where('slug', 'user')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'name' => 'Jone Doe',
            'email' => 'user@mail.com',
            'password' => 'password',
            'status' => false,
        ]);
    }
}
