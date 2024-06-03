<?php

namespace Database\Factories;

use App\Models\Médecin;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RendezVous>
 */
class RendezVousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'medecin_id' => Médecin::factory(),
            'patient_id' => Patient::factory(),
            'date' => $this->faker->date,
            'heure' => $this->faker->time,
        ];
    }
}
