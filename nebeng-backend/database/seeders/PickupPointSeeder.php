<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PickupPoint;

class PickupPointSeeder extends Seeder
{
    public function run(): void
    {
        $points = [

            // YOGYAKARTA
            [
                'city_id' => 1,
                'pos_name' => 'Pos 1',
                'address' => 'Patihan, Kecamatan Kraton, Kota Yogyakarta',
                'latitude' => -7.809886,
                'longitude' => 110.362916,
            ],
            [
                'city_id' => 1,
                'pos_name' => 'Pos 2',
                'address' => 'Terminal Giwangan Yogyakarta',
                'latitude' => -7.833189,
                'longitude' => 110.392271,
            ],
            [
                'city_id' => 1,
                'pos_name' => 'Pos 3',
                'address' => 'Stasiun Tugu Yogyakarta',
                'latitude' => -7.789182,
                'longitude' => 110.363503,
            ],

            // PURWOKERTO
            [
                'city_id' => 2,
                'pos_name' => 'Pos 1',
                'address' => 'Terminal Bulupitu Purwokerto',
                'latitude' => -7.447581,
                'longitude' => 109.250551,
            ],
            [
                'city_id' => 2,
                'pos_name' => 'Pos 2',
                'address' => 'Alun Alun Purwokerto',
                'latitude' => -7.424368,
                'longitude' => 109.230198,
            ],
            [
                'city_id' => 2,
                'pos_name' => 'Pos 3',
                'address' => 'Stasiun Purwokerto',
                'latitude' => -7.418465,
                'longitude' => 109.221841,
            ],

            // SOLO
            [
                'city_id' => 3,
                'pos_name' => 'Pos 1',
                'address' => 'Terminal Tirtonadi Solo',
                'latitude' => -7.550308,
                'longitude' => 110.820712,
            ],
            [
                'city_id' => 3,
                'pos_name' => 'Pos 2',
                'address' => 'Stasiun Solo Balapan',
                'latitude' => -7.557404,
                'longitude' => 110.821426,
            ],
            [
                'city_id' => 3,
                'pos_name' => 'Pos 3',
                'address' => 'Alun Alun Solo',
                'latitude' => -7.577903,
                'longitude' => 110.828608,
            ],
        ];

        foreach ($points as $point) {
            PickupPoint::create($point);
        }
    }
}