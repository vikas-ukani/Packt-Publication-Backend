<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    protected $model = Books::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'category_id' => Category::inRandomOrder()->first()->id,
            'body' => $this->faker->text,
            'status' => $this->faker->randomElement([
                'PUBLISHED', 'DRAFT'
            ]),
            'image' => 'https://source.unsplash.com/random',
            'price' => $this->faker->randomFloat(2, 10, 200),
            'auther' => $this->faker->name(),
        ];
    }
}
