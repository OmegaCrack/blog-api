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
        User::firstOrCreate(
            ['email' => 'admin@blog.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'bio' => 'System administrator and lead developer.',
                'website' => 'https://example.com',
                'email_verified_at' => now(),
            ]
        );

        // Create editor user
        User::firstOrCreate(
            ['email' => 'editor@blog.com'],
            [
                'name' => 'Editor User',
                'password' => Hash::make('password'),
                'role' => 'editor',
                'bio' => 'Content editor and reviewer.',
                'email_verified_at' => now(),
            ]
        );

        // Create author users
        User::firstOrCreate(
            ['email' => 'john@blog.com'],
            [
                'name' => 'John Doe',
                'password' => Hash::make('password'),
                'role' => 'author',
                'bio' => 'Full-stack developer with 5+ years of experience.',
                'website' => 'https://johndoe.dev',
                'email_verified_at' => now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'jane@blog.com'],
            [
                'name' => 'Jane Smith',
                'password' => Hash::make('password'),
                'role' => 'author',
                'bio' => 'Frontend specialist and UI/UX enthusiast.',
                'website' => 'https://janesmith.design',
                'email_verified_at' => now(),
            ]
        );

        // Create additional test users with faker
        \App\Models\User::factory(10)->create([
            'role' => 'author',
            'bio' => 'Blog author and content creator.',
            'email_verified_at' => now(),
        ]);
    }
}
