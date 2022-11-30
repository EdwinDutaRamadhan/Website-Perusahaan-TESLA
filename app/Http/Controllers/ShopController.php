<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\LandingShopModel;
class ShopController extends Controller
{
    public function index(){
        return view('public.shop.shop', ['data' => LandingShopModel::all()]);
    }
    public function category(Request $req){
    $type = null;

        switch ($req->category) {
            case 'charging':
                $data = Category::find(1);
                $data = $data->shop;//Relations
                $type="Charging";//Section type

                return view('public.shop.shop-category', [
                    'data1'=> $data->where('type', 'At Home'),
                    'data2'=> $data->where('type', 'On the Road'),
                    'data3'=> $data->where('type', 'Parts'),
                    'type' => $type
                ]);
                break;

            case 'vehicle-accessories':
                $data = Category::find(2);
                $data = $data->shop;
                $dataS = $data->where('model', 'Model S');
                $data3 = $data->where('model', 'Model 3');
                $dataX = $data->where('model', 'Model X');
                $dataY = $data->where('model', 'Model Y');
                return view('public.shop.shop-category', [
                    'modelSInterior' => $dataS->where('type', 'Interior'),
                    'modelSEksterior' => $dataS->where('type', 'Eksterior'),
                    'modelSWheels' => $dataS->where('type', 'Wheels and Tires'),
                    'modelSFloor' => $dataS->where('type', 'Floor Mats'),
                    'modelSKeys' => $dataS->where('type', 'Keys'),
                    'model3Interior' => $data3->where('type', 'Interior'),
                    'model3Eksterior' => $data3->where('type', 'Eksterior'),
                    'model3Wheels' => $data3->where('type', 'Wheels and Tires'),
                    'model3Floor' => $data3->where('type', 'Floor Mats'),
                    'model3Keys' => $data3->where('type', 'Keys'),
                    'modelXInterior' => $dataX->where('type', 'Interior'),
                    'modelXEksterior' => $dataX->where('type', 'Eksterior'),
                    'modelXWheels' => $dataX->where('type', 'Wheels and Tires'),
                    'modelXFloor' => $dataX->where('type', 'Floor Mats'),
                    'modelXKeys' => $dataX->where('type', 'Keys'),
                    'modelYInterior' => $dataY->where('type', 'Interior'),
                    'modelYEksterior' => $dataY->where('type', 'Eksterior'),
                    'modelYWheels' => $dataY->where('type', 'Wheels and Tires'),
                    'modelYFloor' => $dataY->where('type', 'Floor Mats'),
                    'modelYKeys' => $dataY->where('type', 'Keys'),
                    'type' => 'Vehicle'
                ]);
                break;

            case 'apparel':
                $type = "Apparel";
                break;

            case 'lifestyle' :
                $data = Category::find(4);
                $data = $data->shop;//category_id
                $type="Lifestyle";

                return view('public.shop.shop-category', [
                    'data1'=> $data->where('type','Bags'),
                    'data2'=> $data->where('type','Drinkware'),
                    'data3'=> $data->where('type','Mini Teslas'),
                    'data4'=> $data->where('type','Outdoor and Tech'),
                    'type' => $type
                ]);
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
