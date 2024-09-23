<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
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
            'message' => fake()->text(),
            'subject' => fake()->randomElement(['Skills', 'Hobbies', 'Task']),
            'email' => fake()->randomElement(['test@example.com', 'test10@example.com', 'test20@example.com']),
        ];
    }
}
