<?php

namespace App\Http\Controllers;

use App\Models\LandingModel;
use App\Http\Requests\StoreLandingModelRequest;
use App\Http\Requests\UpdateLandingModelRequest;

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

    
}
