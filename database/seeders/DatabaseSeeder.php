<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingModel;
use App\Models\Category;
use App\Models\LandingShopModel;
use App\Models\User;
use App\Models\CarModel;
use App\Models\Shop;

use function Symfony\Component\String\b;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            LandingModelSeeder::class,
            LandingShopModelSeeder::class,
            CarModelSeeder::class,
            ShopSeeder::class,
        ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Edwin Duta Ramadhan',
            'email' => 'test@example.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Admin Gabut',
            'email' => 'gabut@example.com',
            'password' => bcrypt('123425')
        ]);
        //User::factory(5)->create();
        


        //Shop::factory(20)->create();
        // Shop::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'type' => 'At Home',
        //     'model' => null,
        //     'title' => 'J1772 Wall Connector',
        //     'size' => null,
        //     'price' => '550',
        //     'desc' => 'Our J1772 Wall Connector is a convenient charging solution for Tesla and non-Tesla electric vehicles alike, and is ideal for houses, apartments, hospitality properties and workplaces. \r\n\r\nWith up to 44 miles of range added per hour, a 24-foot cable, multiple power settings and a versatile indoor/outdoor design, J1772 Wall Connector provides unparalleled convenience. It can also power-share to maximize existing electrical capacity, automatically distributing power and allowing you to charge multiple vehicles simultaneously.\r\n\r\nThe J1772 Wall Connector is compatible with most North American electric vehicles. Tesla vehicles will require an additional SAE J1772 Charging Adapter to charge, which is included with all Tesla vehicles upon delivery.\r\n\r\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 J1772 Wall Connectors, visit Commercial Charging.',
        //     'image' => 'shop-images/pMwAOclhQiLrQ8rPNdBzcvqnxpMY9WzfKplq2BdR.avif'
        // ]);
        // Shop::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'type' => 'At Home',
        //     'model' => null,
        //     'title' => 'Wall Connector',
        //     'size' => null,
        //     'price' => '400',
        //     'desc' => 'Wall Connector is the most convenient charging solution for houses, apartments, hospitality properties and workplaces.\r\n\r\nWith up to 44 miles of range added per hour of charging, a 24 foot cable length, multiple power settings, and a versatile indoor/outdoor design, Wall Connector provides unparalleled convenience.\r\n\r\nWall Connectors can power-share to maximize existing electrical capacity, automatically distributing power to charge multiple cars simultaneously.\r\n\r\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 Wall Connectors, contact CommercialCharging@tesla.com.',
        //     'image' => 'shop-images/YWPzF8mQCvqI4Vw8IfRSDXUCe8rJELNIwIglXNtV.avif'
        // ]);
    }
}
