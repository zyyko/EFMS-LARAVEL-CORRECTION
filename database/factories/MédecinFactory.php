<?php

namespace Database\Factories;

use App\Models\Spécialité;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Médecin>
 */
class MédecinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prénom' => $this->faker->firstName,
            'specialite_id' => Spécialité::factory()
        ];
    }
}
