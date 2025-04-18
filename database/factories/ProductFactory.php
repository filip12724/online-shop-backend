<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'discount' => $this->faker->optional()->numberBetween(0, 100),
            'image' => $this->faker->optional()->imageUrl(640, 480, 'products', true),
            'stock' => $this->faker->numberBetween(1, 100),
            'rating' => $this->faker->numberBetween(1,5)
        ];
    }
}
