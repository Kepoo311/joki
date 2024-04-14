<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashController;
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
    Route::get("/riwayat",'riwayat');
    Route::get("/{product:name}/atk",'show');
    Route::post('/kirim','kirimpesan');
});

Route::post('/order',[OrderController::class,'order']);

Route::controller(LoginController::class)->group(function () {
    Route::get('login','index')->name("login")->middleware("guest");
    Route::post('login','authData');
    Route::post('logout','logout');
});

Route::controller(RegisterController::class)->group(function () {
Route::get('register','index')->middleware("guest");
Route::post('register','storeData');
});


Route::view('test','test');

Route::get('/products/{product:name}',[DetailController::class, 'show']);

Route::controller(DashController::class)->group(function (){
Route::get('admin','index');
Route::get('/admin/user','showUser')->middleware(['role:admin']);
Route::get('/admin/support','showSupport')->middleware(['role:admin']);
Route::get('/admin/logs','showLogs')->middleware(['role:admin']);
Route::get('/admin/promote','promote')->middleware(['role:admin']);
Route::get('/admin/demote','demote')->middleware(['role:admin']);
Route::post('/dashboard/clearlogs','ClearLogs')->middleware(['role:admin']);;

Route::get('/admin/customer','showCust')->middleware(['role:admin|worker']);
Route::get('/admin/ongoing','showOngo')->middleware(['role:admin|worker']);
Route::get('/admin/order_complete','showComplete')->middleware(['role:admin|worker']);
Route::get('/admin/detailorder','showDetail')->middleware(['role:admin|worker']);
Route::get('/admin/takeorder/{orderan}','takeOrder')->middleware(['role:admin|worker']);
Route::get('/admin/doneOrder/{orderan}','doneOrder')->middleware(['role:admin|worker']);

Route::get('/admin/chat/{info}','showPesan')->middleware(['role:admin|worker']);
Route::post('/admin/kirimpesan','kirimpesan');
});

Route::controller(UserDashController::class)->group(function (){
    Route::get('/user/dash','index');
    Route::get('/user/riview','riview');
    Route::post('/user/riview/kirim','kirimRiview');
    Route::post('/user/account_changes','update_account')->name('account_changes');
});

// Route::view('admin','admin.index');
// Route::view('user','admin.user');
// Route::view('logs','admin.logs');
// Route::view('customer','admin.customer');
// Route::view('ongoing','admin.ongoing');
// Route::view('order_complete','admin.order_done');