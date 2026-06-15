<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        Trip::create([
            'mitra_id' => 7,
            'vehicle_type' => 'motor',
            'origin_point_id' => 6,
            'destination_point_id' => 4,
            'departure_date' => '2024-09-01',
            'departure_time' => '13:00',
            'price' => 9000,
            'seat_total' => 1,
            'seat_available' => 1,
            'status' => 'active'
        ]);

        Trip::create([
            'mitra_id' => 7,
            'vehicle_type' => 'motor',
            'origin_point_id' => 4,
            'destination_point_id' => 5,
            'departure_date' => '2024-09-02',
            'departure_time' => '09:00',
            'price' => 12000,
            'seat_total' => 1,
            'seat_available' => 1,
            'status' => 'active'
        ]);
    }
}