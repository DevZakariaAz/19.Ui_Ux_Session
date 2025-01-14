<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use Illuminate\Database\Seeder;

class StagiaireSeeder extends Seeder
{
    public function run()
    {
        Stagiaire::create([
            'nom' => 'Zakaria Azizi',
            'email' => 'zakaria.azizi@example.com',
            'groupe' => 'Group A',
        ]);

        Stagiaire::create([
            'nom' => 'Sami El Kadiri',
            'email' => 'sami.elkadiri@example.com',
            'groupe' => 'Group B',
        ]);
    }
}
