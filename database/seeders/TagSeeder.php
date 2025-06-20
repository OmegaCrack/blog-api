<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'PHP', 'Laravel', 'JavaScript', 'React', 'Vue.js', 'Node.js',
            'Python', 'Django', 'Flask', 'Ruby', 'Rails', 'Java',
            'Spring', 'C#', '.NET', 'Go', 'Rust', 'TypeScript',
            'MySQL', 'PostgreSQL', 'MongoDB', 'Redis', 'Docker',
            'Kubernetes', 'AWS', 'Azure', 'GCP', 'CI/CD', 'Testing',
            'API', 'REST', 'GraphQL', 'Microservices', 'Architecture'
        ];

        foreach ($tags as $tagName) {
            $slug = Str::slug($tagName);
            Tag::firstOrCreate(
                ['slug' => $slug],
                ['name' => $tagName]
            );
        }
    }
}
