<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;

class AdminController extends Controller
{
    public function index(Request $req)
    {
        switch ($req->section) {
            case 'Home ':
                return view('public.admin.dashboard-main', [
                    'section' => 'Home'
                ]);
                break;
            case 'Landing':
                return view('public.admin.dashboard-main', [
                    'section' => 'Landing',
                    'data' => LandingModel::all()
                ]);
                break;
            case 'Inventory':
                return view('public.admin.dashboard-main', [
                    'section' => 'Inventory',
                    'data' => CarModel::all()
                ]);
                break;
            case 'Shop':
                return view('public.admin.dashboard-main', [
                    'section' => 'Shop'
                ]);
                break;

            default:
                # code...
                break;
        }
    }
    //Admin
    public function action(Request $req)
    {
        $result = null;
        switch ($req->section) {
            case 'Sort' :
                $section = 'Inventory';
                if($req->sortModel == "All Model" || $req->sortModel == 'null'){
                    $data = CarModel::all();
                }else{
                    $data = CarModel::where('model', $req->sortModel)->get();
                }
                break;
            case 'Home All':
                $section = 'Home';//key route
                $data = null;//Obj 
                break;

            case 'Landing All':
                $section = 'Landing';//key route
                $data = LandingModel::all();//Obj 
                break;
            case 'Landing Update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                $result = LandingModel::where('id', $req->id)->update([
                    'note' => $req->note,
                    'image' => $image
                ]);
                $section = 'Landing';//key route
                $data = LandingModel::all();//Obj 
                break;

            case 'Inventory All':
                $section = 'Inventory';//key route
                $data = CarModel::all();//Obj 
                break;
            case 'Inventory Delete':
                $result = CarModel::where('id', $req->id)->delete();
                $section = 'Inventory';//key route
                $data = CarModel::all();//Obj 
                break;

            case 'Shop All':
                $section = 'Shop';//key route
                $data = null;//Obj 
                break;

            default:
                $data = null;//Obj 
                $section = null;//key route
                break;
        }

        return view('public.admin.dashboard-main', ['section' => $section, 'data' => $data, 'result' => $result]);
    }
}
