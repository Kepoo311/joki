<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::controller(App\Http\Controllers\homeController::class)->group(function () {
    Route::get("/", 'index')->name("Home");
});

Route::get("/atk/{product:name}",[App\Http\Controllers\homeController::class,'show']);
Route::get('login',[LoginController::class,'index'])->name("login")->middleware("guest");
Route::post('login',[LoginController::class,'authData']);
Route::post('logout',[LoginController::class,'logout']);

Route::get('register',[RegisterController::class, 'index'])->middleware("guest");
Route::post('register',[RegisterController::class, 'storeData']);



Route::view('test','test');

Route::get('/products/{product:name}',[DetailController::class, 'show']);

Route::view('admin','admin.index');
Route::view('user','admin.user');
Route::view('logs','admin.logs');
Route::view('customer','admin.customer');
Route::view('ongoing','admin.ongoing');
Route::view('order_complete','admin.order_done');