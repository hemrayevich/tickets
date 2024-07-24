<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Showtime>
 */
class ShowtimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => \App\Models\Movie::factory(),
            'cinema_id' => \App\Models\Cinema::factory(),
            'start_time' => $this->faker->dateTimeBetween('+1 day', '+1 month'),
            'seats_available' => $this->faker->numberBetween(50, 200),
        ];
    }
}
