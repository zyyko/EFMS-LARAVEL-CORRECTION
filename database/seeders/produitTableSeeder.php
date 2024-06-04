<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'NomProduit' => 'Nvidia 1660 Super',
            'DescriptionP' => 'Nvidia description 1',
            'categorie_id' => 1
        ]);

        Produit::create([
            'NomProduit' => 'Ryzen 5800',
            'DescriptionP' => 'Ryzen description 1',
            'categorie_id' => 2
        ]);
    }
}
