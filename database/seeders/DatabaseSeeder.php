<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Booking;
use App\Models\City;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CitySeeder::class,
            HotelSeeder::class,
        ]);

        Room::factory()->count(100)->create();
        Guest::factory()->count(100)->create();
        Booking::factory()->count(100)->create();
    }
}
