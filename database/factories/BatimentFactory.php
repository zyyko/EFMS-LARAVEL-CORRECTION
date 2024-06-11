<?php

namespace Database\Factories;

use App\Models\Batiment;
use App\Models\Propriétaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batiment>
 */
class BatimentFactory extends Factory
{

    protected $model = Batiment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company,
            'adresse' => $this->faker->address,
            'id_propriétaire' => Propriétaire::factory(),
            'entré_principale' => 1,
            'entré_secondaire' => rand(0, 1),
            'nbApptDispo' => rand(0, 10),
        ];
    }
}
