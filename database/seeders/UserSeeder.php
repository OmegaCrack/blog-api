<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@blog.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'bio' => 'System administrator and lead developer.',
            'website' => 'https://example.com',
            'email_verified_at' => now(),
        ]);

        // Create editor user
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@blog.com',
            'password' => Hash::make('password'),
            'role' => 'editor',
            'bio' => 'Content editor and reviewer.',
            'email_verified_at' => now(),
        ]);

        // Create author users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@blog.com',
            'password' => Hash::make('password'),
            'role' => 'author',
            'bio' => 'Full-stack developer with 5+ years of experience.',
            'website' => 'https://johndoe.dev',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@blog.com',
            'password' => Hash::make('password'),
            'role' => 'author',
            'bio' => 'Frontend specialist and UI/UX enthusiast.',
            'website' => 'https://janesmith.design',
            'email_verified_at' => now(),
        ]);
    }
}
