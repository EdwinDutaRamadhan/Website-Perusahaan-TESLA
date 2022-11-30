<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
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
            'name' => 'Charging',
            'slug' => 'charging'
        ]);
        Category::create([
            'name' => 'Vehicle Accessories',
            'slug' => 'vehicle-accessories'
        ]);
        Category::create([
            'name' => 'Apparel',
            'slug' => 'apparel'
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
    }
}
