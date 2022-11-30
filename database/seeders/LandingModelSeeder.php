<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingModel;
class LandingModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandingModel::create([
            'model_id' => '1',
            'model' => 'Model 3',
            'note' => 'Environmentally friendly',
            'image' => 'landing-images/XUADZfGsjxI4QqI4zGsvmp9dWw71aGKfMekRnNZm.jpg'
        ]);
        LandingModel::create([
            'model_id' => '2',
            'model' => 'Model Y',
            'note' => 'Environmentally friendly',
            'image' => 'landing-images/Tzu9BNEtuplqRxcQOy84wsuYor3NBPdJlRnGbRCJ.jpg'
        ]);
        LandingModel::create([
            'model_id' => '3',
            'model' => 'Model S',
            'note' => 'Environmentally friendly',
            'image' => 'landing-images/kbA1GeQY9kqwPVbbeglih00hEYxpVkNrqTIQkVT5.jpg'
        ]);
        LandingModel::create([
            'model_id' => '4',
            'model' => 'Model X',
            'note' => 'Environmentally friendly',
            'image' => 'landing-images/HyxRg5OgHIG4DzjKXZCaKc5aeSPYD9MDj7uP9NCy.jpg'
        ]);
        LandingModel::create([
            'model_id' => '5',
            'model' => 'Solar Panels',
            'note' => 'Lowest Cost Solar Panels in America',
            'image' => 'landing-images/1hkTOgYxbAbs4klA2sPEf8C15JTZYH3Knf5loyIe.jpg'
        ]);
        LandingModel::create([
            'model_id' => '6',
            'model' => 'Solar Roof',
            'note' => 'Produce Clean Energy',
            'image' => 'landing-images/LISUUX2lra53x6TdJplM2EoMlgkEBjZGQ8XpreSy.webp'
        ]);
        LandingModel::create([
            'model_id' => '7',
            'model' => 'Accessories',
            'note' => '',
            'image' => 'landing-images/k8PWGzq4eIjvTRqLPQ1JXY1hAVMhhGtRISdthaKJ.jpg'
        ]);
    }
}
