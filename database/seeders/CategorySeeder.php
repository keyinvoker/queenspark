<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'category' => 'Lizard'
        ]);
        Category::create([
            'category' => 'Gecko'
        ]);
        Category::create([
            'category' => 'Frog'
        ]);
        Category::create([
            'category' => 'Arachnid'
        ]);
        Category::create([
            'category' => 'Vitamin'
        ]);
    }
}
