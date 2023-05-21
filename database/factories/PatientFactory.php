<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => fake()->regexify('[A-Z]{5}[0-9]{3}'),
            'name' => fake()->name(),
            'age' => fake()->numberBetween(10,100),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'TA' => fake()->numberBetween(10,30),
            'glycemie' => fake()->numberBetween(0,200),
            'poids' => fake()->numberBetween(12,50),
            'albuminurie' => fake()->numberBetween(0,60),
            'observation' => fake()->realText($maxNbChars = 50, $indexSize = 1),
            'created_at' =>fake()->dateTimeBetween('-2 months', '-1 months')
        ];
    }
}
