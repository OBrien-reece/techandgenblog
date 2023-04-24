<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Social',
            'slug' => 'social',
            'about' => 'The Social section of our blog is all about exploring the
                        latest trends, news, and updates in the world of social media.
                        We cover everything from new social platforms to marketing tips,
                        social media campaigns, and much more.'
        ]);

        Category::factory()->create([
            'name' => 'Tech',
            'slug' => 'tech',
            'about' => 'The Social section of our blog is all about exploring the
                        latest trends, news, and updates in the world of social media.
                        We cover everything from new social platforms to marketing tips,
                        social media campaigns, and much more.'
        ]);

        Category::factory()->create([
            'name' => 'Apps',
            'slug' => 'apps',
            'about' => 'The Apps section of our blog is dedicated to exploring the latest
                        mobile and web applications, from productivity tools to gaming apps and everything
                        in between.'
        ]);

        Category::factory()->create([
            'name' => 'AI',
            'slug' => 'ai',
            'about' => 'The AI section of our blog is dedicated to exploring the latest developments and
                        advancements in the field of Artificial Intelligence. We cover everything from machine learning
                        algorithms to natural language processing, computer vision, and more.'
        ]);

        Category::factory()->create([
            'name' => 'Blockchain',
            'slug' => 'blockchain',
            'about' => 'The Crypto section of our blog is dedicated to exploring the world of
                        cryptocurrencies and blockchain technology. We cover everything from the latest trends
                        in the crypto market to the newest blockchain projects, ICOs, and much more. Our team
                        of writers are passionate about diving deep into the technicalities of the crypto world,
                        and sharing their insights with you. '
        ]);
    }
}
