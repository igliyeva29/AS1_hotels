<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Ashgabat',
            'Turkmenbashy',
        ];

        foreach($objs as $obj) {
            City::create([
                'name' => $obj,
            ]);
        }
    }
}
