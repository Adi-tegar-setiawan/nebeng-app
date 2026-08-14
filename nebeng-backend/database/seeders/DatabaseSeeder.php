<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // 1. Buat Akun Dummy Default dengan nomor HP
        
        // Akun Admin
        User::firstOrCreate(
            ['email' => 'admin@nebeng.com'],
            [
                'name' => 'Administrator Nebeng',
                'phone' => '081234567890',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Akun Customer
        User::firstOrCreate(
            ['email' => 'customer@nebeng.com'],
            [
                'name' => 'Customer Demo',
                'phone' => '081234567891',
                'password' => Hash::make('password'),
                'role' => 'customer',
            ]
        );

        // Akun Mitra (Driver)
        User::firstOrCreate(
            ['email' => 'mitra@nebeng.com'],
            [
                'name' => 'Mitra Driver Demo',
                'phone' => '081234567892',
                'password' => Hash::make('password'),
                'role' => 'mitra',
            ]
        );

        // 2. Jalankan Seeder Lokasi & Trip
        $this->call([
            CitySeeder::class,
            PickupPointSeeder::class,
            TripSeeder::class,
        ]);
    }
}