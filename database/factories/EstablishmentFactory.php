<?php

namespace Database\Factories;

use App\Models\Establishment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Establishment>
 */
class EstablishmentFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'name' => fake()->company(),
            'address' => fake()->streetAddress().', Tultepec, Estado de México',
            'latitude' => fake()->latitude(14, 33),
            'longitude' => fake()->longitude(-118, -86),
            'description' => fake()->paragraph(),
            'is_visible' => fake()->boolean(85)
        ];
    }
}
