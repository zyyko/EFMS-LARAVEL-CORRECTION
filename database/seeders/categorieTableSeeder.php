<?php

namespace Database\Seeders;

use App\Models\Catégorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catégorie::create([
            'NomCategorie' => 'Composants PC',
        ]);

        Catégorie::create([
            'NomCategorie' => 'Périphériques',
        ]);
    }
}
