<?php

namespace Database\Factories;

use App\Models\Catégorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livre>
 */
class livreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->title,
            'pages' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'categorie_id' => Catégorie::factory()

        ];
    }
}
