<?php

namespace Database\Factories;

use App\Models\Articles;
use App\Models\Category;
use App\Models\User;
use http\Message\Body;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    protected $model = Articles::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(maxNbChars:100),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(4))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'category_id' => Category::factory()->create(),
            'user_id' => User::factory()->create(),
            'slug' => $this->faker->slug()
        ];
    }
}
