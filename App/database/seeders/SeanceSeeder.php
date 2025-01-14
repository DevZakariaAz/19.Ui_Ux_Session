<?php

namespace Database\Seeders;

use App\Models\Seance;
use Illuminate\Database\Seeder;

class SeanceSeeder extends Seeder
{
    public function run()
    {
        Seance::create([
            'cours' => 'Math 101',
            'horaire' => '2025-01-15 10:00:00',
            'duree' => 60,
        ]);

        Seance::create([
            'cours' => 'Physics 102',
            'horaire' => '2025-01-16 14:00:00',
            'duree' => 90,
        ]);
    }
}
