<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Laptop','Handphone','Video Games','Pendingin Ruangan','Tv','Elektronik Dapur','Baterai','Lampu','Speaker','Remot Kontrol'];
        
        foreach($name as $n){
            Category::create([
                'name' => $n,
                'slug' => Str::slug($n, '-'),
            ]);
        }
    }
}