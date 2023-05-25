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

        $category = collect(Category::all()->modelKeys());
        $users = collect(User::all()->modelKeys());

        return [
            'title' => $this->faker->text(maxNbChars:100),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(14))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'category_id' => $category->random(),
            'user_id' => $users->random(),
            'slug' => $this->faker->slug()
        ];
    }
}
