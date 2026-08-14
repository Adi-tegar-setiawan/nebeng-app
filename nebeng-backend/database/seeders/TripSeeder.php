<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;
use App\Models\User;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        // Cari user yang memiliki role 'mitra', jika tidak ada ambil user pertama yang ada
        $mitra = User::where('role', 'mitra')->first() ?? User::first();

        // Jika tabel users kosong, hentikan seeder
        if (!$mitra) {
            return;
        }

        Trip::create([
            'mitra_id' => $mitra->id, // Gunakan ID milik mitra secara dinamis
            'vehicle_type' => 'motor',
            'origin' => 'Purwokerto',
            'destination' => 'Purwokerto',
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
            'mitra_id' => $mitra->id, // Gunakan ID milik mitra secara dinamis
            'vehicle_type' => 'motor',
            'origin' => 'Purwokerto',
            'destination' => 'Purwokerto',
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