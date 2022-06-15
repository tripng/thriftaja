<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimoni>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'komentar' => $this->faker->paragraph(),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'user_id' => 1,
            'barang_id' => 1,
        ];
    }
}