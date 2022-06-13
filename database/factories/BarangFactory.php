<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'kode_barang' => $this->faker->regexify('[A-Z]{3}-[0-9]{3}'),
            'nama_barang' => $this->faker->randomElement(['Iphone','Samsung','Leptop Asus TUF Gaming']),
            'harga' => $this->faker->randomNumber(5,true),
            'stok' => $this->faker->randomNumber(2,true),
            'foto' => $this->faker->lexify('???????.jpg'),
            'keterangan' => $this->faker->paragraph(),
        ];
    }
}