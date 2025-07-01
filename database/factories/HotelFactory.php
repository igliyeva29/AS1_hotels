<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'city_id' => $city->id,
            // 'name' => fake()->word(),
            // 'address' => fake()->address(),
            // 'phone' => fake()->phoneNumber(),
            // 'email' => fake()->email(),
            // 'image' => null,
            // 'star' => fake()->numberBetween(1,5),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}
