<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ride>
 */
class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('now', '+1 month');
        
        return [
            'start_location' => $this->faker->city,
            'ending_location' => $this->faker->city,
            'start_time' => $startTime,
            'available_seats' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'status' => $this->faker->randomElement(['pending', 'active', 'completed', 'cancelled']),
            'luggage_allowed' => $this->faker->boolean(70),
            'pet_allowed' => $this->faker->boolean(30),
            'conversation_allowed' => $this->faker->boolean(80),
            'music_allowed' => $this->faker->boolean(60),
            'member_id' => Member::inRandomOrder()->first()->id,
        ];
    }
}
