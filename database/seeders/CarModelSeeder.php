<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarModel;
class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::create([
            'model' => 'Model 3',
            'name' => '2023 Model 3',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Reno',
            'trim' => 'Model 3 Performance Dual Motor All-Wheel Drive',
            'color' => 'Pearl White Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '18\'\' Aero Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 4.20,
            'topspeed' => 145,
            'range' => 358,
            'fee' => 57990,
            'image' => 'inventory-images/1AmGFI9On8v7sG3EOo4HnfwGbDYvogyYJ3aEeuG7.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model 3',
            'name' => '2023 Model 3',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Reno',
            'trim' => 'Model 3 Performance Dual Motor All-Wheel Drive',
            'color' => 'Deep Blue Metallic Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '18\'\' Aero Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 4.20,
            'topspeed' => 145,
            'range' => 358,
            'fee' => 57990,
            'image' => 'inventory-images/5IEHcArbA1myH8gfLXCjw2RmYpmMBsXKyjAaWMhD.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model X',
            'name' => '2022 Model Y',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model Y Performance Dual Motor All-Wheel Drive',
            'color' => 'Pearl White Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '21\'\' Überturbine Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => 'Five Seat Interior',
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.50,
            'topspeed' => 155,
            'range' => 303,
            'fee' => 65120,
            'image' => 'inventory-images/8LixNsSRacgWhtGrxzd5tRgocsGN0jTcmP5pvGU6.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model X',
            'name' => '2023 Model X',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model X Plaid',
            'color' => 'Midnight Silver Metallic',
            'internal' => 'Cream Interior with Carbon Fiber Decor',
            'wheels' => '20\'\' Cyberstream Wheels',
            'autopilot' => 'Enhanced Autopilot',
            'seatlayout' => 'Six Seat Interior',
            'additional' => null,
            'startspeed' => 2.50,
            'topspeed' => 149,
            'range' => 333,
            'fee' => 148490,
            'image' => 'inventory-images/xdyxzuqL3VTttW5ZqWFVSVS9c7dsizYtJMKe4pVq.jpg',
            'trial' => '1-Year',
        ]);
        CarModel::create([
            'model' => 'Model Y',
            'name' => '2022 Model Y',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Cleveland',
            'trim' => 'Model Y Long Range All-Wheel Drive Performance',
            'color' => 'Red Multi-Coat Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '21\'\' Überturbine Wheels',
            'autopilot' => 'Enhanced Autopilot',
            'seatlayout' => 'Five Seat Interior',
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.50,
            'topspeed' => 155,
            'range' => 303,
            'fee' => 77990,
            'image' => 'inventory-images/FkdHJd8EDJbJH6TelJjhZGl6GhyHX9ubbsHfitxh.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model S',
            'name' => '2022 Model S',
            'type' => 'New',
            'milage' => '278',
            'delivery' => 'Bay Area',
            'trim' => 'Model S Plaid',
            'color' => 'Pearl White Multi-Coat',
            'internal' => 'All Black Premium Interior with Carbon Fiber Décor',
            'wheels' => '19\'\' Tempest Wheels',
            'autopilot' => 'Full Self Driving',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 1.99,
            'topspeed' => 200,
            'range' => 396,
            'fee' => 142030,
            'image' => 'inventory-images/McMbZmVxRSL1aFlmeVECTUlKIXoYASkgApsgGSPx.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model S',
            'name' => '2023 Model S',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model S Plaid',
            'color' => 'Deep Blue Metallic',
            'internal' => 'Black and White Premium Interior with Carbon Fiber Décor',
            'wheels' => '21\'\' Arachnid Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 1.99,
            'topspeed' => 200,
            'range' => 348,
            'fee' => 143990,
            'image' => 'inventory-images/D8pkgCa16U2acs3XqZ7M5yHgrbeOSR7UkCQXgJUk.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model Y',
            'name' => '2023 Model Y',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model Y Performance Dual Motor All-Wheel Drive',
            'color' => 'Midnight Silver Metallic Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '21\'\' Überturbine Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => 'Five Seat Interior',
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.50,
            'topspeed' => 155,
            'range' => 303,
            'fee' => 69990,
            'image' => 'inventory-images/5zyFH9DCY8elKmgNJcOlOt9xnkJpQ68jRwLC6lKZ.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model S',
            'name' => '2023 Model S',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model S Dual Motor All-Wheel Drive',
            'color' => 'Solid Black',
            'internal' => 'Black and White Premium Interior with Walnut Décor',
            'wheels' => '19\'\' Tempest Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.10,
            'topspeed' => 155,
            'range' => 405,
            'fee' => 108490,
            'image' => 'inventory-images/DOr0n9v1UXnMltmdYUncfoVVK8yQbrv6ioGIj3Ji.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model S',
            'name' => '2023 Model S',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model S Plaid',
            'color' => 'Solid Black',
            'internal' => 'All Black Premium Interior with Carbon Fiber Décor',
            'wheels' => '21\'\' Arachnid Wheels',
            'autopilot' => 'Enhanced Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 1.99,
            'topspeed' => 200,
            'range' => 348,
            'fee' => 147990,
            'image' => 'inventory-images/5RkzJeIPGd4vecAcYNtVQDESQ12H7P6CPtwLcbN9.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model 3',
            'name' => '2023 Model 3',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model 3 Performance Dual Motor All-Wheel Drive',
            'color' => 'Deep Blue Metallic Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '21\'\' Überturbine Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => NULL,
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.10,
            'topspeed' => 162,
            'range' => 315,
            'fee' => 63990,
            'image' => 'inventory-images/5IEHcArbA1myH8gfLXCjw2RmYpmMBsXKyjAaWMhD.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model Y',
            'name' => '2023 Model Y',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Bay Area',
            'trim' => 'Model Y Performance Dual Motor All-Wheel Drive',
            'color' => 'Deep Blue Metallic Paint',
            'internal' => 'All Black Premium Interior',
            'wheels' => '21\'\' Überturbine Wheels',
            'autopilot' => 'Autopilot',
            'seatlayout' => 'Five Seat Interior',
            'additional' => 'Performance Upgrade',
            'startspeed' => 3.50,
            'topspeed' => 155,
            'range' => 303,
            'fee' => 69990,
            'image' => 'inventory-images/5zyFH9DCY8elKmgNJcOlOt9xnkJpQ68jRwLC6lKZ.jpg',
            'trial' => '30-Day',
        ]);
        CarModel::create([
            'model' => 'Model ',
            'name' => '2023 Model ',
            'type' => 'New',
            'milage' => 'Less than 50',
            'delivery' => 'Central Calilfornia',
            'trim' => 'Model X Plaid',
            'color' => 'Red Multi-Coat',
            'internal' => 'All Black Premium Interior',
            'wheels' => '122\'\' Turbine Wheels',
            'autopilot' => 'Full Self Driving',
            'seatlayout' => 'Six Seat Interior',
            'additional' => 'Performance Upgrade',
            'startspeed' => 2.50,
            'topspeed' => 163,
            'range' => 311,
            'fee' => 163990,
            'image' => 'inventory-images/Ro35jrztvcpLXwhZm8jpm7PmKpq0YV6kQUIHgNXD.jpg',
            'trial' => '1-Year',
        ]);
    }
}
