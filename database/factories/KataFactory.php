<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kata>
 */
class KataFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'title' => $this->faker->word(),
            'text' => $this->faker->paragraphs(2),
            'user_id' => User::inRandomOrder()->first()->get()->id,
        ];
    }
}