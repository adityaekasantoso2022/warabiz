<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kuliner'
        ]);

        Category::create([
            'name' => 'Fashion'
        ]);

        Category::create([
            'name' => 'Agri Bisnis'
        ]);

        Category::create([
            'name' => 'Jasa'
        ]);
    }
}
