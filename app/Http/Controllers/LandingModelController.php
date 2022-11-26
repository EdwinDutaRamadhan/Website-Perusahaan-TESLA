<?php

namespace App\Http\Controllers;

use App\Models\LandingModel;
use Illuminate\Http\Request;
class LandingModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.home', ['data'=> LandingModel::all()]);
    }

    public function store(Request $req){
        LandingModel::create([
            'model_id' => $req->model_id,
            'model' => $req->model,
            'note' => $req->note,
            'image'=> $req->file('image')->store('landing-images')
        ]);
        return redirect('/admin/landing');
    }
    
}
