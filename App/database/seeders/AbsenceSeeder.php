<?php

namespace Database\Seeders;

use App\Models\Absence;
use Illuminate\Database\Seeder;

class AbsenceSeeder extends Seeder
{
    public function run()
    {
        Absence::create([
            'date' => '2025-01-15',
            'statut' => 'Absent',
        ]);

        Absence::create([
            'date' => '2025-01-16',
            'statut' => 'Present',
        ]);
    }
}
