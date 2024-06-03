<?php

namespace Database\Seeders;

use App\Models\Médecin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MédecinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Médecin::factory(10)->create();
    }
}
