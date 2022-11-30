<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingShopModel;
class LandingShopModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandingShopModel::create([
            'nama' => 'Model S Accessories',
            'image' => 'ShopLanding1.png'
        ]);
        LandingShopModel::create([
            'nama' => 'Model 3 Accessories',
            'image' => 'ShopLanding2.png'
        ]);
        LandingShopModel::create([
            'nama' => 'Model X Accessories',
            'image' => 'ShopLanding3.png'
        ]);
        LandingShopModel::create([
            'nama' => 'Model Y Accessories',
            'image' => 'ShopLanding4.png'
        ]);
        LandingShopModel::create([
            'nama' => 'Charging',
            'image' => 'ShopLanding5.png'
        ]);
        LandingShopModel::create([
            'nama' => 'Lifestyle',
            'image' => 'ShopLanding6.png'
        ]);
    }
}
