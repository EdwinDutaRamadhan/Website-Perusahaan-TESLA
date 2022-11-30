<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;
use App\Models\Shop;
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


                /**
                 * 
                 * Determine the route for Home Section
                 * 
                 */

            case 'Home All':
                $section = 'Home'; //key route
                $data = null; //Obj 
                break;

                /**
                 * 
                 * Determine the route for Landing Section
                 * 
                 */

            case 'Landing All':
                $section = 'Landing'; //key route
                $data = LandingModel::all(); //Obj 
                break;
            case 'Landing Update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                $result = LandingModel::where('id', $req->id)->update([
                    'note' => $req->note,
                    'image' => $image
                ]);
                $section = 'Landing'; //key route
                $data = LandingModel::all(); //Obj 
                break;

                /**
                 * 
                 * Determine the route for Inventory Section
                 * 
                 */

            case 'Inventory All':
                $section = 'Inventory'; //key route
                $data = CarModel::all(); //Obj 
                break;
            case 'Inventory Insert':
                CarModel::create([
                    'model' => $req->model,
                    'name' => $req->name,
                    'type' => $req->type,
                    'milage' => $req->milage,
                    'delivery' => $req->delivery,
                    'trim' => $req->trim,
                    'color' => $req->color,
                    'internal' => $req->internal,
                    'wheels' => $req->wheels,
                    'autopilot' => $req->autopilot,
                    'seatlayout' => $req->seatlayout,
                    'additional' => $req->additional,
                    'startspeed' => $req->startspeed,
                    'topspeed' => $req->topspeed,
                    'range' => $req->range,
                    'fee' => $req->fee,
                    'image' => $req->file('image')->store('inventory-images'),
                    'trial' => $req->trial
                ]);
                $section = 'Inventory'; //key route
                $data = CarModel::all(); //Obj 
                break;
            case 'Inventory Delete':
                $result = CarModel::where('id', $req->id)->delete();
                $section = 'Inventory'; //key route
                $data = CarModel::all(); //Obj 
                break;
            case 'Inventory Update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                CarModel::where('id', $req->id)->update([
                    'model' => $req->model,
                    'name' => $req->name,
                    'type' => $req->type,
                    'milage' => $req->milage,
                    'delivery' => $req->delivery,
                    'trim' => $req->trim,
                    'color' => $req->color,
                    'internal' => $req->internal,
                    'wheels' => $req->wheels,
                    'autopilot' => $req->autopilot,
                    'seatlayout' => $req->seatlayout,
                    'additional' => $req->additional,
                    'startspeed' => $req->startspeed,
                    'topspeed' => $req->topspeed,
                    'range' => $req->range,
                    'fee' => $req->fee,
                    'image' => $image,
                    'trial' => $req->trial
                ]);

                $section = 'Inventory'; //key route
                $data = CarModel::all(); //Obj
                break;
            case 'Sort':
                $section = 'Inventory';
                if ($req->sortModel == "All Model" || $req->sortModel == 'null') {
                    $data = CarModel::all();
                } else {
                    $data = CarModel::where('model', $req->sortModel)->get();
                }
                break;

                /**
                 * 
                 * Determine the route for Shop Section
                 * 
                 */

            case 'Shop All':

                $section = 'Shop'; //key route
                $data = Shop::all(); //Obj 
                break;
            case 'Shop Insert' :
                Shop::create([
                    'category_id' => $req->category_id,
                    'user_id' => 1,
                    'type' => $req->type,
                    'model' => $req->model,
                    'title' => $req->title,
                    'price' => $req->price,
                    'desc' => $req->desc,
                    'image' => $req->file('image')->store('shop-images'),
                ]);
                $section = 'Shop'; //key route
                $data = Shop::all(); //Obj 
                break;

            default:
                $data = null; //Obj 
                $section = null; //key route
                break;
        }

        return view('public.admin.dashboard-main', ['section' => $section, 'data' => $data, 'result' => $result]);
    }
}
