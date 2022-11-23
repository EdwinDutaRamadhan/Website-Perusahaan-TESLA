<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopModelController;
use App\Http\Controllers\LandingModelController;

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
Route::get('/shop', [ShopModelController::class, 'show']);
Route::get('/shop/details/{nama}', [ShopModelController::class, 'single']);

//Sort
Route::post('/shop/sort', [ShopModelController::class, 'sort']);