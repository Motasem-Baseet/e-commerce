<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            // Call the RolesTableSeeder first to make sure roles exist
            $this->call(RoleTableSeeder::class);
    
            // Create an admin user
            $user = User::firstOrCreate([
                'email' => 'motasem.baseet@gmail.com',
            ], [
                'name' => 'User',
                'password' => bcrypt('password'),
            ]);
    
            // Attach the admin role to the user
            $userRole = Role::where('name', 'user')->first();
            if ($userRole) {
                $user->roles()->attach($userRole->id);
            } else {
                echo "Admin role not found! Run RolesTableSeeder first.";
            }
        

    }
}
