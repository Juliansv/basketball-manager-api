<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'height' => fake()->numberBetween(150, 200),
            'weight' => fake()->numberBetween(60, 110),
            'birthday' => fake()->dateTimeThisCentury(2010),
            'team_id' => Team::inRandomOrder()->first()->id,
        ];
    }
}
