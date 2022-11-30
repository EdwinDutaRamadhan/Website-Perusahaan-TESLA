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
        $title1 = null;$title2 = null;$title3 = null;$title4 = null;
        $title5 = null;$title6 = null;$title7 = null;
        $data1 = null;$data2 = null;$data3 = null;$data4 = null;
        $data5 = null;$data6 = null;$data7 = null;
        $model = null;
        switch ($req->category) {
            case 'charging':
                $data = Category::find(1);
                $data = $data->shop;//Relations
                $data1 = $data->where('type', 'At Home');//sort
                $data2 = $data->where('type', 'On the Road');//sort
                $data3 = $data->where('type', 'Parts');//sort

                //Title
                $title1 = "At Home";
                $title2 = "On the Road";
                $title3 = "Parts";
                break;
            
            default:
                # code...
                break;
        }
        return view('public.shop.shop-category', [
            'data1'=> $data1,
            'data2'=> $data2,
            'data3'=> $data3,
            'data4'=> $data4,
            'data5'=> $data5,
            'data6'=> $data6,
            'data7'=> $data7,
            'title1' => $title1,
            'title2' => $title2,
            'title3' => $title3,
            'title4' => $title4,
            'title5' => $title5,
            'title6' => $title6,
            'title7' => $title7,
            'model' => $model
        ]);
    }
}
