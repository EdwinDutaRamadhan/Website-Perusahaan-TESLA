<?php

namespace App\Http\Controllers;

use App\Models\LandingShopModel;
use App\Http\Requests\StoreLandingShopModelRequest;
use App\Http\Requests\UpdateLandingShopModelRequest;

class LandingShopModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.shop.shop',['data' => LandingShopModel::all()]);
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
     * @param  \App\Http\Requests\StoreLandingShopModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandingShopModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandingShopModel  $landingShopModel
     * @return \Illuminate\Http\Response
     */
    public function show(LandingShopModel $landingShopModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandingShopModel  $landingShopModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingShopModel $landingShopModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandingShopModelRequest  $request
     * @param  \App\Models\LandingShopModel  $landingShopModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandingShopModelRequest $request, LandingShopModel $landingShopModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandingShopModel  $landingShopModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingShopModel $landingShopModel)
    {
        //
    }
}
