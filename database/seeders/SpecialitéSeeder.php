<?php

namespace Database\Seeders;

use App\Models\Spécialité;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitéSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spécialité::factory(5)->create();
    }
}
