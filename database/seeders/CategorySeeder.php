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
            'name' => 'Auto-Combo'
        ]);
        Category::create([
            'name' => 'Universal'
        ]);
        Category::create([
            'name' => 'BnB'
        ]);
        Category::create([
            'name' => 'ToD'
        ]);
        Category::create([
            'name' => 'SPARK'
        ]);
    }
}
