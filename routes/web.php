<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;        use App\Models\Customer;
use App\Http\Controllers\BannerController;          use App\Models\Banner;
use App\Http\Controllers\CategaryController;        use App\Models\Categary;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get  ('/customer/index',         [CustomerController::class, 'index']);
Route::get  ('/customer/delete/{id}',   [CustomerController::class, 'delete']);
Route::get  ('/customer/create',        [CustomerController::class, 'create']);
Route::get  ('/customer/edit',          [CustomerController::class, 'edit']);
Route::get  ('/customer/status/{id}',   [CustomerController::class, 'status']);
Route::post ('/register/store',         [CustomerController::class, 'store']);
Route::post ('/register/update/{id}',   [CustomerController::class, 'update']);

Route::get  ('/banner/create',          [BannerController::class,'create']);
Route::get  ('/banner/delete/{id}',     [BannerController::class, 'delete']);
Route::get  ('/banner/edit/{id}',       [BannerController::class, 'edit']);
Route::post ('/banner/update/{id}',     [BannerController::class, 'update']);
Route::post ('/banner/store',           [BannerController::class,'store']);
Route::get  ('/banner/index',           [BannerController::class, 'index']);
Route::get  ('/banner/status/{id}',     [BannerController::class, 'status']);


Route::get  ('/categary/create',        [CategaryController::class, 'create']);
Route::get  ('/categary/index',         [CategaryController::class, 'index']);
Route::get  ('/categary/edit/{id}',     [CategaryController::class, 'edit']);
Route::get  ('/categary/delete/{id}',   [CategaryController::class, 'delete']);
Route::get  ('/categary/status/{id}',   [CategaryController::class, 'status']);
Route::post ('/categary/update/{id}',   [CategaryController::class, 'update']);
Route::post ('/categary/store',         [CategaryController::class, 'store']);

