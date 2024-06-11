<?php

namespace Database\Factories;

use App\Models\Propriétaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropriétaireFactory extends Factory
{
    protected $model = Propriétaire::class;

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
            'cin' =>  $this->faker->randomNumber(8),
            'email' => $this->faker->email,
            'fonction' => $this->faker->jobTitle,
        ];
    }
}
