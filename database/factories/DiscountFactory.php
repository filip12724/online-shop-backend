<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['percentage', 'fixed']);


        $value = ($type === 'percentage')
            ? $this->faker->randomFloat(2, 1, 50) 
            : $this->faker->randomFloat(2, 1, 1000); 

    
        $startDate = $this->faker->dateTimeBetween('-1 month', '+6 months');
        $endDate = $this->faker->dateTimeBetween($startDate, Carbon::parse($startDate)->addMonths(6));

        return [
            'name' => $this->faker->words(2, true) . ' Discount', 
            'type' => $type,
            'value' => $value,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'isActive' => $this->faker->boolean(80),
        ];
    }
}
