<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotel = Hotel::inRandomOrder()->first();

        return [
            'hotel_id' => $hotel->id,
            'room_number' => fake()->unique()->numberBetween(100,500),
            'type' => fake()->randomElement($objs = ['single', 'double', 'suit']),
            'per_night_price' => fake()->numberBetween(500, 2000),
            'is_available' => fake()->boolean(50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
