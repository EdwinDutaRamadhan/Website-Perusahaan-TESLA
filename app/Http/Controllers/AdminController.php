<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;
class AdminController extends Controller
{
    public function index(Request $req){
        switch ($req->section) {
            case 'Home ':
                return view('public.admin.dashboard-main',[
                    'section' => 'Home'
                ]);
                break;
            case 'Landing':
                return view('public.admin.dashboard-main',[
                    'section' => 'Landing',
                    'data' => LandingModel::all()
                ]);
                break;
            case 'Inventory':
                return view('public.admin.dashboard-main',[
                    'section' => 'Inventory',
                    'data' => CarModel::all()
                ]);
                break;
            case 'Shop':
                return view('public.admin.dashboard-main',[
                    'section' => 'Shop'
                ]);
                break;
            
            default:
                # code...
                break;
        }
    }
    public function landingUpdate(Request $req){
        LandingModel::where('model_id',$req->model_id)->update([
            'note' => $req->note,
            'image' => $req->image
        ]);
        return redirect('/admin/dashboard/');
    }
    //Admin Inventory
    public function action(Request $req){

        switch ($req->section) {
            case 'Home All' :
                $section = 'Home';
                $data = null;
                break;
            case 'Landing All' :
                $section = 'Landing';
                $data = LandingModel::all();
                break;
            case 'Inventory All' :
                $section = 'Inventory';
                $data = CarModel::all();
                break;
            case 'Shop All' :
                $section = 'Shop';
                break;
            case 'Inventory Delete':
                CarModel::where('id', $req->id)->delete();
                $data = CarModel::all();
                break;
            
            default:
            $data = CarModel::all();
                break;
        }

        return view('public.admin.dashboard-main', ['section' => $section, 'data' => $data]);
    }
}
