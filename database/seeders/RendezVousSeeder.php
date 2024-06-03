<?php

namespace Database\Seeders;

use App\Models\RendezVous;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendezVousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RendezVous::factory(20)->create();
    }
}
