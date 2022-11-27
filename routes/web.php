<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarModelController;
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

Route::get('/admin/landing/', function(){
    return view('public.admin.dashboard-main', ['section' => 'landing']);
})->name('admin-landing');
Route::get('/admin/inventory/', function(){
    return view('public.admin.dashboard-main',['section' => 'inventory']);
})->name('admin-inventory');

Route::post('/admin/landing', [LandingModelController::class, 'store']);
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
Route::post('/inventory',[CarModelController::class, 'inven']);
//Detail
Route::get('/inventory/detail/{id}', [CarModelController::class, 'single']);
//Payments
Route::post('/inventory/detail/payments', [CarModelController::class, 'payments']);



//ADMIN
Route::post('/admin/inventory/', [CarModelController::class, 'store']);

Route::get('/admin/dashboard', function(){
    return view('public.admin.dashboard-main', ['section'=> 'Home']);
})->name('admin-dashboard');

Route::post('/admin/dashboard/', [AdminController::class, 'action']);