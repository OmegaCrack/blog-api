<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();

        $posts = [
            [
                'title' => 'Getting Started with Laravel 12',
                'excerpt' => 'Learn the basics of Laravel 12 and build your first application.',
                'content' => 'Laravel 12 introduces several new features that make web development even more enjoyable. In this comprehensive guide, we\'ll explore the new features, installation process, and best practices for building modern web applications.',
                'status' => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Advanced PHP Techniques for Modern Development',
                'excerpt' => 'Explore advanced PHP concepts and patterns used in modern applications.',
                'content' => 'PHP has evolved significantly over the years. Modern PHP development involves understanding design patterns, dependency injection, and advanced OOP concepts. This article covers essential techniques every PHP developer should know.',
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Building RESTful APIs with Laravel',
                'excerpt' => 'A complete guide to creating robust REST APIs using Laravel.',
                'content' => 'RESTful APIs are the backbone of modern web applications. Laravel provides excellent tools for building APIs, including resource controllers, API resources, and authentication. Learn how to build professional-grade APIs.',
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Docker and Laravel: A Perfect Match',
                'excerpt' => 'Learn how to containerize your Laravel applications with Docker.',
                'content' => 'Docker revolutionizes how we deploy and manage applications. When combined with Laravel Sail, it provides a consistent development environment. This guide covers everything from basic concepts to production deployment.',
                'status' => 'draft',
            ],
            [
                'title' => 'Frontend Integration with Laravel',
                'excerpt' => 'Connecting modern frontend frameworks with Laravel backends.',
                'content' => 'Modern web applications often use separate frontend and backend systems. Learn how to integrate React, Vue.js, or other frontend frameworks with your Laravel API, including authentication and state management.',
                'status' => 'published',
                'published_at' => now()->subHours(6),
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'excerpt' => $postData['excerpt'],
                'content' => $postData['content'],
                'status' => $postData['status'],
                'published_at' => $postData['published_at'] ?? null,
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
            ]);

            // Attach random tags to each post
            $randomTags = $tags->random(rand(2, 5));
            $post->tags()->attach($randomTags);
        }
    }
}
