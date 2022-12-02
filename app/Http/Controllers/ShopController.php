<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\LandingShopModel;
use App\Models\Shop;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
 
class ShopController extends Controller
{
    public function index()
    {
        return view('public.shop.shop', ['data' => LandingShopModel::all()]);
    }
    public function category(Request $req)
    {
        $type = null;

        switch ($req->category) {
            case 'charging':
                $data = Category::find(1);
                $data = $data->shop; //Relations
                $type = "Charging"; //Section type

                return view('public.shop.shop-category', [
                    'data1' => $data->where('type', 'At Home'),
                    'data2' => $data->where('type', 'On the Road'),
                    'data3' => $data->where('type', 'Parts'),
                    'type' => $type
                ]);
                break;
            case 'Charging':
                $data = Category::find(1);
                $data = $data->shop; //Relations
                $type = "Charging"; //Section type

                return view('public.shop.shop-category', [
                    'data1' => $data->where('type', 'At Home'),
                    'data2' => $data->where('type', 'On the Road'),
                    'data3' => $data->where('type', 'Parts'),
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
                $data = Category::find(3);
                $data = $data->shop;
                $dataMen = $data->where('model', 'Men');
                $dataWomen = $data->where('model', 'Women');
                $dataKids = $data->where('model', 'Kids');

                return view('public.shop.shop-category', [
                    'menTees' => $dataMen->where('type', 'Tees'),
                    'menHoodies' => $dataMen->where('type', 'Sweathshirts and Hoodies'),
                    'menOnesies' => $dataMen->where('type', 'Onesies'),
                    'menOuterwear' => $dataMen->where('type', 'Outerwear'),
                    'menJoggers' => $dataMen->where('type', 'Joggers'),
                    'menHats' => $dataMen->where('type', 'Hats'),
                    'menSocks' => $dataMen->where('type', 'Socks'),
                    'womenTees' => $dataWomen->where('type', 'Tees'),
                    'womenHoodies' => $dataWomen->where('type', 'Sweathshirts and Hoodies'),
                    'womenOnesies' => $dataWomen->where('type', 'Onesies'),
                    'womenOuterwear' => $dataWomen->where('type', 'Outerwear'),
                    'womenJoggers' => $dataWomen->where('type', 'Joggers'),
                    'womenHats' => $dataWomen->where('type', 'Hats'),
                    'womenSocks' => $dataWomen->where('type', 'Socks'),
                    'kidsTees' => $dataKids->where('type', 'Tees'),
                    'kidsHoodies' => $dataKids->where('type', 'Sweathshirts and Hoodies'),
                    'kidsOnesies' => $dataKids->where('type', 'Onesies'),
                    'kidsOuterwear' => $dataKids->where('type', 'Outerwear'),
                    'kidsJoggers' => $dataKids->where('type', 'Joggers'),
                    'kidsHats' => $dataKids->where('type', 'Hats'),
                    'kidsSocks' => $dataKids->where('type', 'Socks'),
                    'type' => "Apparel"
                ]);
                break;

            case 'lifestyle':
                $data = Category::find(4);
                $data = $data->shop; //category_id
                $type = "Lifestyle";

                return view('public.shop.shop-category', [
                    'data1' => $data->where('type', 'Bags'),
                    'data2' => $data->where('type', 'Drinkware'),
                    'data3' => $data->where('type', 'Mini Teslas'),
                    'data4' => $data->where('type', 'Outdoor and Tech'),
                    'type' => $type
                ]);
                break;
            case 'Lifestyle':
                $data = Category::find(4);
                $data = $data->shop; //category_id
                $type = "Lifestyle";

                return view('public.shop.shop-category', [
                    'data1' => $data->where('type', 'Bags'),
                    'data2' => $data->where('type', 'Drinkware'),
                    'data3' => $data->where('type', 'Mini Teslas'),
                    'data4' => $data->where('type', 'Outdoor and Tech'),
                    'type' => $type
                ]);
                break;
            case 'Model-S-Accessories':
                $data = Category::find(2);
                $data = $data->shop;
                $dataS = $data->where('model', 'Model S');
                return view('public.shop.shop-category-landing', [
                    'modelSInterior' => $dataS->where('type', 'Interior'),
                    'modelSEksterior' => $dataS->where('type', 'Eksterior'),
                    'modelSWheels' => $dataS->where('type', 'Wheels and Tires'),
                    'modelSFloor' => $dataS->where('type', 'Floor Mats'),
                    'modelSKeys' => $dataS->where('type', 'Keys'),
                    'model' => 'Model S'
                ]);
                break;
            case 'Model-3-Accessories':
                $data = Category::find(2);
                $data = $data->shop;
                $data3 = $data->where('model', 'Model 3');
                return view('public.shop.shop-category-landing', [
                    'model3Interior' => $data3->where('type', 'Interior'),
                    'model3Eksterior' => $data3->where('type', 'Eksterior'),
                    'model3Wheels' => $data3->where('type', 'Wheels and Tires'),
                    'model3Floor' => $data3->where('type', 'Floor Mats'),
                    'model3Keys' => $data3->where('type', 'Keys'),
                    'model' => 'Model 3'
                ]);
                break;
            case 'Model-X-Accessories':
                $data = Category::find(2);
                $data = $data->shop;
                $dataX = $data->where('model', 'Model X');
                return view('public.shop.shop-category-landing', [
                    'modelXInterior' => $dataX->where('type', 'Interior'),
                    'modelXEksterior' => $dataX->where('type', 'Eksterior'),
                    'modelXWheels' => $dataX->where('type', 'Wheels and Tires'),
                    'modelXFloor' => $dataX->where('type', 'Floor Mats'),
                    'modelXKeys' => $dataX->where('type', 'Keys'),
                    'model' => 'Model X'
                ]);
                break;
            case 'Model-Y-Accessories':
                $data = Category::find(2);
                $data = $data->shop;
                $dataY = $data->where('model', 'Model Y');
                return view('public.shop.shop-category-landing', [
                    'modelYInterior' => $dataY->where('type', 'Interior'),
                    'modelYEksterior' => $dataY->where('type', 'Eksterior'),
                    'modelYWheels' => $dataY->where('type', 'Wheels and Tires'),
                    'modelYFloor' => $dataY->where('type', 'Floor Mats'),
                    'modelYKeys' => $dataY->where('type', 'Keys'),
                    'model' => 'Model Y'
                ]);
                break;
            default:
                # code...
                break;
        }
    }
    public function product(Request $req){
        //$title = str_replace('-',' ',$req->title);
        $id = Crypt::decryptString($req->id);
        //$category_id = Crypt::decryptString($req->category_id);
        $data = Shop::where('id',$id)->get();
        $dataRekomendasi = Shop::where('category_id', $req->category_id)->latest()->limit(3)->get();
        return view('public.shop.shop-product',[
            'data' => $data,
            'dataRekomendasi' => $dataRekomendasi
        ]);
    }
}
