<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $objs = [
            'Yyldyz',
            'Oguzhan',
            'Syyahat',
            'Turkmenistan',
            'Diwan',
            'Ak Altyn',
            'Hazar',
            'Deniz',
            'Merdana',
            'Gami',
           
        ];

        foreach($objs as $obj) {
            $city = City::inRandomOrder()->first();
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
