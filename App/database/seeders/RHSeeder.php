<?php

namespace Database\Seeders;

use App\Models\RH;
use Illuminate\Database\Seeder;

class RHSeeder extends Seeder
{
    public function run()
    {
        RH::create([
            'nom' => 'Ali Ben',
            'email' => 'ali.ben@example.com',
        ]);

        RH::create([
            'nom' => 'Sophie Deschamps',
            'email' => 'sophie.deschamps@example.com',
        ]);
    }
}
