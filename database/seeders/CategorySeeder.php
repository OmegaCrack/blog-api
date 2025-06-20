<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Latest tech news and tutorials',
                'color' => '#3B82F6'
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Frontend and backend development topics',
                'color' => '#10B981'
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'description' => 'iOS and Android development',
                'color' => '#8B5CF6'
            ],
            [
                'name' => 'DevOps',
                'description' => 'DevOps practices and tools',
                'color' => '#F59E0B'
            ],
            [
                'name' => 'Database',
                'description' => 'Database design and optimization',
                'color' => '#EF4444'
            ],
        ];

        foreach ($categories as $category) {
            // Generate slug from name if not provided
            if (!isset($category['slug'])) {
                $category['slug'] = Str::slug($category['name']);
            }
            
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}