<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use App\Http\Requests\StoreShopModelRequest;
use App\Http\Requests\UpdateShopModelRequest;

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
}
