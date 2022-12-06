<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingModel;
use App\Models\CarModel;
use App\Models\Shop;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(Request $req)
    {
            if(isset(Auth::user()->role) and Auth::user()->role == 'Admin'){
                switch ($req->section) {
                    case 'dashboard':
                        $active = "dashboard";
                        $data = LandingModel::all();
                        break;
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
                        
                        $data = null;
                        break;
                }
                return view('public.admin.dashboard', [
                    'section' => $req->section,
                    'active' => $active,
                    'result' => 0,
                    'data' => $data
                ]);
            }else{
            return abort(404);
        }
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
                return redirect('/admin/inventory')->with('create', 'Insert data '.$req->name.' successfully!');
                break;
            case 'delete':
                $id = Crypt::decryptString($req->id);
                CarModel::where('id', $id)->delete();
                return redirect('/admin/inventory')->with('delete', 'Delete data successfully!');
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
                return redirect('/admin/inventory')->with('update', 'Update data '.$req->name.' successfully!');
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
    public function shop(Request $req){
        switch ($req->action) {
            case 'store':
                Shop::create([
                    'category_id' => $req->category_id,
                    'user_id' => auth()->user()->id,
                    'type' => $req->type,
                    'model' => $req->model,
                    'title' => $req->title,
                    'price' => $req->price,
                    'desc' => $req->desc,
                    'image' => $req->file('image')->store('shop-images'),
                ]);
                return redirect('/admin/shop')->with('create', 'Insert data '.$req->title.' successfully!');
                break;
            case 'update':
                ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
                Shop::where('id', $req->id)->update([
                    'category_id' => $req->category_id,
                    'user_id' => auth()->user()->id,
                    'type' => $req->type,
                    'model' => $req->model,
                    'title' => $req->title,
                    'price' => $req->price,
                    'desc' => $req->desc,
                    'image' => $image
                ]);
                return redirect('/admin/shop')->with('update', 'Update data '.$req->title.' successfully!');
                break;
            case 'delete':
                $id = Crypt::decryptString($req->id);
                Shop::where('id', $id)->delete();
                return redirect('/admin/shop')->with('delete', 'Delete data successfully!');
                break;
            default:
                # code...
                break;
        }
    }
    public function landing(Request $req){
        ($req->image == null) ? $image = $req->image_kw : $image = $req->image;
        LandingModel::where('id', $req->id)->update([
            'model_id' => $req->model_id,
            'model' => $req->model,
            'note' => $req->note,
            'image' => $image
        ]);
        return redirect('/admin/landing')->with('update', 'Update data successfully!');
    }


    //Admin
    public function action(Request $req)
    {
        $result = null;
        switch ($req->section) {
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


