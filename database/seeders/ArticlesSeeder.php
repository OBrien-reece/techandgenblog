<?php

namespace Database\Seeders;

use App\Models\Articles;
use Database\Factories\ArticlesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articles::factory(20)->create();
    }
}
