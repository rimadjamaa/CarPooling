<?php

namespace Database\Factories;

use App\Models\Pooling;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PoolingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nbplaces = $this->faker->numberBetween(1, 5);
        return [
                'user_id' => $this->faker->numberBetween(1, 20), // Assuming you have users with IDs from 1 to 20
                'depart' => $this->faker->city,
                'destination' => $this->faker->city,
                'time_depart' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
                'nb_place_max' => $nbplaces,
                'nb_place_available' => $nbplaces,
                'longletude' => $this->faker->longitude,
                'latitude' => $this->faker->latitude,
                'price' => $this->faker->numberBetween(100, 1000),
                'gender' => $this->faker->randomElement(['male', 'female', 'any']),
                'bagage_size' => $this->faker->randomElement(['small', 'medium', 'large']),
        ];
    }
}
