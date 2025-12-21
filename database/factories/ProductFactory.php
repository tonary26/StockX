<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'price' => $this->faker->numberBetween(),
            'amount' => $this->faker->numberBetween(),
            'image' => $this->faker->image(),
            'category_id' => Category::whereNotNull('parent_id')
                                       ->inRandomOrder()
                                       ->first()
                                       ->id
        ];
    }
}
