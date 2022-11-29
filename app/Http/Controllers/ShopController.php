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

        switch ($req->category) {
            case 'charging':
                $data = Category::find(1);
                $data = $data->shop;//Relations
                $data1 = $data->where('type', 'At Home');//sort

                return view('public.shop.shop-category', ['data1'=> $data1]);
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
