<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\RegisterController;
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
Route::get('/admin', [LoginController::class, 'indexAdmin'])->name('admin-login');
Route::post('/admin/inventory/', [CarModelController::class, 'store']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-shop');

//Admin Baru
Route::get('/admin/{section}', [AdminController::class, 'index'])->name('admin-dashboard');


Route::post('/admin/dashboard/', [AdminController::class, 'action'])->name('admin');

Route::get('/admin/test/', function(){
    return view('public.admin.dashboard');
});

//Shop
Route::get('/shop/login', [LoginController::class, 'indexUser'])->name('user-login');
Route::get('/shop/register', [RegisterController::class, 'index'])->name('user-register');
Route::get('/shop',[ShopController::class, 'index']);
Route::get('/shop/category/{category}', [ShopController::class, 'category']);
Route::get('/shop/product/{category_id}/{id}', [ShopController::class, 'product']);