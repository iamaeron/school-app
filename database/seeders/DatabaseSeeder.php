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

        User::create([
            'firstname' => 'Test',
            'lastname' => 'Admin',
            'middlename' => 'Meow',
            'username' => 'admin',
            'profile_image' => null,
            'role' => 'admin',
            'phone_number' => '3294928',
            'organization_id' => null,
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
        ]);
    }
}
