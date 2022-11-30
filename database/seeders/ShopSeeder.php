<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'At Home',
            'model' => null,
            'title' => 'J1772 Wall Connector',
            'size' => null,
            'price' => '550',
            'desc' => 'Our J1772 Wall Connector is a convenient charging solution for Tesla and non-Tesla electric vehicles alike, and is ideal for houses, apartments, hospitality properties and workplaces. \r\n\r\nWith up to 44 miles of range added per hour, a 24-foot cable, multiple power settings and a versatile indoor/outdoor design, J1772 Wall Connector provides unparalleled convenience. It can also power-share to maximize existing electrical capacity, automatically distributing power and allowing you to charge multiple vehicles simultaneously.\r\n\r\nThe J1772 Wall Connector is compatible with most North American electric vehicles. Tesla vehicles will require an additional SAE J1772 Charging Adapter to charge, which is included with all Tesla vehicles upon delivery.\r\n\r\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 J1772 Wall Connectors, visit Commercial Charging.',
            'image' => 'shop-images/pMwAOclhQiLrQ8rPNdBzcvqnxpMY9WzfKplq2BdR.avif',
            'created_at' => '2022-11-29 08:30:39',
            'updated_at' => '2022-11-29 08:30:39'
        ]);
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'At Home',
            'model' => null,
            'title' => 'Wall Connector',
            'size' => null,
            'price' => '400',
            'desc' => 'Wall Connector is the most convenient charging solution for houses, apartments, hospitality properties and workplaces.\r\n\r\nWith up to 44 miles of range added per hour of charging, a 24 foot cable length, multiple power settings, and a versatile indoor/outdoor design, Wall Connector provides unparalleled convenience.\r\n\r\nWall Connectors can power-share to maximize existing electrical capacity, automatically distributing power to charge multiple cars simultaneously.\r\n\r\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 Wall Connectors, contact CommercialCharging@tesla.com.',
            'image' => 'shop-images/YWPzF8mQCvqI4Vw8IfRSDXUCe8rJELNIwIglXNtV.avif',
            'created_at' => '2022-11-29 08:32:21',
            'updated_at' => '2022-11-29 08:32:21'
        ]);
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'At Home',
            'model' => null,
            'title' => 'Wall Connector Color Matched Faceplate',
            'size' => null,
            'price' => '75',
            'desc' => 'Perfectly pair your Wall Connector to the paint color of your Tesla vehicle with Wall Connector Color Matched Faceplate. Made from the same durable tempered glass as the original design, these faceplates offer a stylish alternative to your Tesla charging setup and easy installation. Available in Midnight Silver Metallic, Deep Blue Metallic, Red Multi-Coat and Solid Black. \r\n\r\nIncludes:\r\n\r\n1x glass faceplate\r\n2x glass cover fasteners\r\nFor installation instructions, visit Replacing Faceplate of Gen 3 Wall Connector.\r\n\r\nNote: Compatible with all Gen 3 Wall Connectors.',
            'image' => 'shop-images/6E5cHHr9PKONfNBnl0tC2VGeSlLJNv3EakzrdfXz.avif',
            'created_at' => '2022-11-29 08:33:29',
            'updated_at' => '2022-11-29 08:33:29'
        ]);
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'On the Road',
            'model' => null,
            'title' => 'Mobile Connector',
            'size' => null,
            'price' => '230',
            'desc' => 'Stay charged on extended trips or when you need it most with Mobile Connector. Using a standard outlet, you can recharge up to 3 miles of range per hour with the NEMA 5-15 Adapter or up to 30 miles of range with the NEMA 14-50 Adapter depending on your vehicle.\r\n\r\nIncludes:\r\n\r\n1x Mobile Connector - 20’ cable\r\n1x NEMA 5-15 Adapter\r\n1x NEMA 14-50 Adapter\r\n1x storage bag\r\nMobile Connector Manual\r\n\r\nNote: Vehicle orders placed after April 28, 2022 will not include a Mobile Connector with delivery. Your order will ship closer to your vehicle delivery date.',
            'image' => 'shop-images/MkUOyfsGw3U9evDu1jkTgNVgwrv98VpD1fiFOP5k.webp',
            'created_at' => '2022-11-29 10:07:06',
            'updated_at' => '2022-11-29 10:07:06'
        ]);
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'On the Road',
            'model' => null,
            'title' => 'NEMA Adapter Bundle',
            'size' => null,
            'price' => '245',
            'desc' => 'Maximize your charging options with the NEMA Adapter Bundle. Simply attach the appropriate adapter to your Mobile Connector, plug into the corresponding outlet and begin charging. With all seven Gen 2 NEMA Adapters in one convenient storage bag, you can charge at any available outlet, at home or on the road.\r\n\r\nIncludes:\r\n\r\n1x Gen 2 NEMA 5-20 Adapter\r\n1x Gen 2 NEMA 6-15 Adapter\r\n1x Gen 2 NEMA 6-20 Adapter\r\n1x Gen 2 NEMA 10-30 Adapter\r\n1x Gen 2 NEMA 14-30 Adapter\r\n1x Gen 2 NEMA 14-50 Adapter\r\n1x Gen 2 NEMA 6-50 Adapter\r\n1x storage bag',
            'image' => 'shop-images/42RbcygbYkVBkcTz6xfNmOOT3RZT7gMldLGXuPqm.jpg',
            'created_at' => '2022-11-29 10:09:06',
            'updated_at' => '2022-11-29 10:09:06'
        ]);
        Shop::create([
            'category_id' => 1,
            'user_id' => 1,
            'type' => 'Parts',
            'model' => null,
            'title' => 'Wall Connector Glass Faceplate',
            'size' => null,
            'price' => '75',
            'desc' => 'Replace your glass faceplate with an identical cover. Make Gen 3 Wall Connector look as good as new and stay charged in style with a new faceplate.\r\n\r\nIncludes:\r\n\r\n1x glass faceplate\r\n2x glass cover fasteners\r\nTo perfectly match your Wall Connector with your vehicle paint color, purchase Wall Connector Color Matched Faceplate.\r\n\r\nFor installation instructions, visit Replacing Faceplate of Gen 3 Wall Connector.\r\n\r\nNote: Compatible with all Gen 3 Wall Connectors.',
            'image' => 'shop-images/WrKiMlvF1u26DF1jiLz1OtJclV7JgjIWB3r8XQSa.webp',
            'created_at' => '2022-11-29 10:10:03',
            'updated_at' => '2022-11-29 10:10:03'
        ]);
    }
}
