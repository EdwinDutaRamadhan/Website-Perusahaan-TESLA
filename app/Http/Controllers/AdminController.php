<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;

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
                    'section' => 'Inventory'
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
}
