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

    public function show()
    {
        return view('public.shop', ['data' => ShopModel::orderBy('harga')->get()]);
    }
    public function single(Request $req)
    {
        return view('public.shop-details', ['data' => ShopModel::where('nama', $req->nama)->get()]);
    }
    public function sort(Request $req){
        switch ($req->sort) {
            case 'price-low':
                return view('public.shop', ['data' => ShopModel::orderBy('harga','asc')->get()]);
                break;
            case 'price-high':
                return view('public.shop', ['data' => ShopModel::orderBy('harga', 'desc')->get()]);
                break;
            case 'sold-low':
                # code...
                break;
            case 'sold-low':
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }
}
