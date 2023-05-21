<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suivi>
 */
class SuiviFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'typeDiabete' => fake()->realText($maxNbChars = 50, $indexSize = 1),
            'date' => $this->faker->dateTime(),
            'observation' => fake()->realText($maxNbChars = 50, $indexSize = 1),
            'created_at' => $this->faker->dateTimeBetween('-2 months', '-1 months'),
        ];
    }
}
