<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;
class AdminController extends Controller
{
    public function index(Request $req){
        switch ($req->section) {
            case 'Home':
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
}
