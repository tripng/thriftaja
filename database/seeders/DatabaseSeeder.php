<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Barang::factory(10)->create();
        User::factory(10)->create();
        Testimoni::factory(5)->create();

        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     BarangSeeder::class,
        // ]);
        
    }
}