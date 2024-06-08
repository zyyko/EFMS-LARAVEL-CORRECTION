<?php

namespace Database\Seeders;

use App\Models\Catégorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catégorie::factory(10)->create();
    }
}
