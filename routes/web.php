<?php

use App\Http\Controllers\CarModelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopModelController;
use App\Http\Controllers\LandingModelController;
use App\Http\Controllers\LandingShopModelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingModelController::class, 'index']);
Route::get('/shop', [LandingShopModelController::class, 'index']);
Route::get('/shop/details/{nama}', [ShopModelController::class, 'single']);

//Sort
Route::post('/shop/sort', [ShopModelController::class, 'sort']);

//Custom
Route::post('/custom/', [CarModelController::class, 'custom']);

//Inventory
Route::get('/inventory/', [CarModelController::class, 'index']);
Route::post('/inventory/', [CarModelController::class, 'sort']);

//Detail
Route::get('/inventory/detail/{id}', [CarModelController::class, 'single']);