<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = City::inRandomOrder()->first();

        $objs = [
            'Yyldyz',
            'Oguzhan',
            'Syyahat',
            'Turkmenistan',
            'Diwan',
        ];

        foreach($objs as $obj) {
            Hotel::create([
                'city_id' => $city->id,
                'name' => $obj,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'image' => null,
                'star' => fake()->numberBetween(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
