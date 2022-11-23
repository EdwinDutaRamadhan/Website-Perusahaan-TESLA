<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use Illuminate\Http\Request;

class ShopModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

   public function show(){
    return view('public.shop', ['data'=> ShopModel::all()]);
   }
   public function single(Request $req){
return view('public.shop-details', ['data' => ShopModel::where('nama', $req->nama)->get()] );
   }
}
