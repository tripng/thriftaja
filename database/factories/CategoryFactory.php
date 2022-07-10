<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'name' => ['Laptop','Handphone','Video Games','Pendingin Ruangan','Tv','Elektronik Dapur','Baterai','Lampu','Speaker','Remot Kontrol'],
            'slug' => $this->faker->slug(),
        ];
    }
}