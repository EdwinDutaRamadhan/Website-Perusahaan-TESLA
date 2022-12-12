<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\UpdateCarModelRequest;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.home.landing-inventory', ['data' => CarModel::all()]);
    }

    public function sort(Request $req)
    {
        // switch ($req->sort) {
        //     case 'fee-asc':
        //         $data = CarModel::where('model', $req->sortModel)->orderBy('fee', 'ASC')->get();
        //         break;
        //     case 'fee-desc':
        //         $data = CarModel::where('model', $req->sortModel)->orderBy('fee', 'DESC')->get();
        //         break;
        //     default:
        //         $data = CarModel::where('model', $req->sortmodel)->get();
        //         break;
        // }
        return view('public.home.landing-inventory', [
            'data' => CarModel::where('model', $req->sortmodel)->get(),
            'sortmodel' => $req->sortmodel,
            'sort' => $req->sort
        ]);
    }
    public function inven(Request $req){
        return view('public.home.landing-inventory', ['data' => CarModel::where('model', $req->sortmodel)->get(), 'sortmodel' => $req->sortmodel]);
    }
    public function single(Request $req)
    {
        $id = Crypt::decryptString($req->id);
        return view('public.home.landing-detail', ['data' => CarModel::where('id', $id)->get()]);
    }
    public function payments(Request $req){
        $payments = $req->payments;
        $adding = 0;
        ($req->enchanced == "true") ? $adding += 6000 : $adding +=0;
        ($req->capability == "true") ? $adding += 15000 : $adding +=0;
        ($req->charging == "true") ? $adding += 400 : $adding +=0;
        return view('public.home.landing-detail', [
            'data' => CarModel::where('id', $req->id)->get(),
            'enchanced' => $req->enchanced,
            'capability' => $req->capability,
            'charging' => $req->charging,
            'payments' => $payments,
            'adding' => $adding,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CarModel::create([
            'model' => $request->model,
            'name' => $request->name,
            'type' => $request->type,
            'milage' => $request->milage,
            'delivery' => $request->delivery,
            'trim' => $request->trim,
            'color' => $request->color,
            'internal' => $request->internal,
            'wheels' => $request->wheels,
            'autopilot' => $request->autopilot,
            'seatlayout' => $request->seatlayout,
            'additional' => $request->additional,
            'startspeed' => $request->startspeed,
            'topspeed' => $request->topspeed,
            'range' => $request->range,
            'fee' => $request->fee,
            'image' => $request->file('image')->store('inventory-images'),
            'trial' => $request->trial
        ]);
        return redirect('/admin/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarModelRequest  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarModelRequest $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        //
    }
}
