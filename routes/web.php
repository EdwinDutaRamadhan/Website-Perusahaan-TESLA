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
//Admin Baru
Route::get('/admin/{section}', [AdminController::class, 'index'])->name('admin-dashboard');
    //Inventory
    Route::post('/admin/inventory/{action}', [AdminController::class, 'inventory']);
    Route::get('/admin/inventory/{action}/{id}', [AdminController::class, 'inventory']);
    //Shop
    Route::post('/admin/shop/{action}', [AdminController::class, 'shop']);
    Route::get('/admin/shop/{action}/{id}', [AdminController::class, 'shop']);
    //Inventory
    Route::post('/admin/landing/update', [AdminController::class, 'landing']);

//Shop

Route::get('/shop',[ShopController::class, 'index']);
Route::get('/shop/category/{category}', [ShopController::class, 'category']);
Route::get('/shop/product/{category_id}/{id}', [ShopController::class, 'product']);

//User
Route::get('/shop/login', [LoginController::class, 'indexUser'])->name('user-login');
Route::get('/shop/register', [RegisterController::class, 'index'])->name('user-register');
Route::post('/shop/registration', [RegisterController::class, 'store']);