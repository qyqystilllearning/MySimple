<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organization;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Codes>
 */
class CodesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->realText(980),
            'type' => fake()->randomElement(['python', 'c', 'cpp', 'bash', 'js', 'tsx', 'env']),
            'length' => fake()->numberBetween(0, 100),
            'organization_id' => Organization::inRandomOrder()->first()->id,
        ];
    }
}
