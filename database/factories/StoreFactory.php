<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flavor' => fake()->unique()->randomElement(['banana', 'mango', 'apple', 'strawberry', 'blackberry', 'pineapple', 'orange']),
            'price' => fake()->randomDigit(2),
            'amount' => fake()->randomDigit(3),
        ];
    }
}
