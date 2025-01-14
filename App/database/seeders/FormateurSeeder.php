<?php

namespace Database\Seeders;

use App\Models\Formateur;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    public function run()
    {
        Formateur::create([
            'nom' => 'Jean Dupont',
            'matiere' => 'Mathematics',
            'email' => 'jean.dupont@example.com',
        ]);

        Formateur::create([
            'nom' => 'Marie Curie',
            'matiere' => 'Physics',
            'email' => 'marie.curie@example.com',
        ]);
    }
}
