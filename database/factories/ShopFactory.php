<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // 'category_id' => 1,
        // 'user_id' => 1,
        // 'type' => 'At Home',
        // 'model' => null,
        // 'title' => 'J1772 Wall Connector',
        // 'size' => null,
        // 'price' => '550',
        // 'desc' => 'Our J1772 Wall Connector is a convenient charging solution for Tesla and non-Tesla electric vehicles alike, and is ideal for houses, apartments, hospitality properties and workplaces. \r\n\r\nWith up to 44 miles of range added per hour, a 24-foot cable, multiple power settings and a versatile indoor/outdoor design, J1772 Wall Connector provides unparalleled convenience. It can also power-share to maximize existing electrical capacity, automatically distributing power and allowing you to charge multiple vehicles simultaneously.\r\n\r\nThe J1772 Wall Connector is compatible with most North American electric vehicles. Tesla vehicles will require an additional SAE J1772 Charging Adapter to charge, which is included with all Tesla vehicles upon delivery.\r\n\r\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 J1772 Wall Connectors, visit Commercial Charging.',
        // 'image' => 'shop-images/pMwAOclhQiLrQ8rPNdBzcvqnxpMY9WzfKplq2BdR.avif'
        return [
            'category_id' => mt_rand(1,4),
            'user_id' => mt_rand(1,2),
            'model' => null,
            'type' => 'At Home',
            'title'=> fake()->sentence(mt_rand(2,8)),
            'size' => null,
            'price' => mt_rand(100,1000),
            'desc' => fake()->sentence(mt_rand(10,20)),
            'image' => 'shop-images/pMwAOclhQiLrQ8rPNdBzcvqnxpMY9WzfKplq2BdR.avif'
        ];
    }
}
