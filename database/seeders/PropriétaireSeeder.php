<?php

namespace Database\Seeders;

use App\Models\Propriétaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropriétaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propriétaire::factory(10)->create();
    }
}
