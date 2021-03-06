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
            'rating' => $this->faker->randomElement(['⭐⭐⭐⭐⭐','⭐⭐⭐⭐','⭐⭐⭐','⭐⭐','⭐']),
            'barang_id' => mt_rand(1,10),
        ];
    }
}