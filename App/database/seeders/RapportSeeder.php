<?php

namespace Database\Seeders;

use App\Models\Rapport;
use Illuminate\Database\Seeder;

class RapportSeeder extends Seeder
{
    public function run()
    {
        Rapport::create([
            'contenu' => 'Absence report for January 2025',
            'dateCreation' => '2025-01-16',
        ]);
    }
}
