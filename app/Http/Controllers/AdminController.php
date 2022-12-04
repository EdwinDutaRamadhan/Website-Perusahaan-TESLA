<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;
use App\Models\Shop;
use Illuminate\Support\Facades\Crypt;
class AdminController extends Controller
{
    public function index(Request $req)
    {
        switch ($req->section) {
            case 'landing':
                $active = "landing";
                $data = LandingModel::all(); //Obj 
                break;
            case 'inventory':
                $active = "inventory";
                $data = CarModel::paginate(10)->withQueryString(); //Obj 
                break;
            case 'shop':
                $active = "shop";
                $data = Shop::with(['user', 'category'])->paginate(10); //Obj 
                break;
            default:
                $active = "dashboard";
                $data = null;
                break;
        }
        return view('public.admin.dashboard', [
            'section' => $req->section,
            'active' => $active,
            'result' => 0,
            'data' => $data
        ]);
    }
    //Admin Baru
    public function inventory(Request $req){
        switch ($req->action) {
            case 'store':
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
                return redirect('/admin/inventory')->with('create', 'Insert data '.$req->name.' successfully');
                break;
            case 'delete':
                $id = Crypt::decryptString($req->id);
                CarModel::where('id', $id)->delete();
                return redirect('/admin/inventory')->with('delete', 'Delete data successfully');
                break;
            case 'update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                $id = Crypt::decryptString($req->id);
                CarModel::where('id', $id)->update([
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
                return redirect('/admin/inventory')->with('update', 'Update data '.$req->name.' successfully');
                break;
            case 'search':
                return view('public.admin.dashboard', [
                    'section' => 'inventory',
                    'active' => 'inventory',
                    'data' => CarModel::latest()->filter(request(['search']))->paginate(10)->withQueryString() //Obj
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
            case 'Inventory Search':
                $section = 'Inventory'; //key route
                $data = CarModel::latest()->filter(request(['search']))->get(); //Obj
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
                $data = Shop::with(['user', 'category'])->paginate(10); //Obj 
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
                $data = Shop::with(['user', 'category'])->paginate(10); //Obj 
                break;
            case 'Shop Update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                $result = Shop::where('id', $req->id)->update([
                    'category_id' => $req->category_id,
                    'user_id' => 1,
                    'type' => $req->type,
                    'model' => $req->model,
                    'title' => $req->title,
                    'price' => $req->price,
                    'desc' => $req->desc,
                    'image' => $image
                ]);
                $section = 'Shop'; //key route
                $data = Shop::with(['user', 'category'])->paginate(10); //Obj 
                break;

            case 'Shop Delete':
                Shop::where('title', $req->name)->delete();
                $section = 'Shop'; //key route
                $data = Shop::with(['user', 'category'])->paginate(10); //Obj 
                break;

            default:
                $data = null; //Obj 
                $section = null; //key route
                break;
        }
        return view('public.admin.dashboard-main', ['section' => $section, 'data' => $data, 'result' => $result]);
    }
}
