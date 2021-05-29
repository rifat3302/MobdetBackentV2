<?php

use App\Http\Controllers\MobilDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DashboadController;
use App\Http\Controllers\OrderController;

use \UxWeb\SweetAlert\SweetAlertServiceProvider;


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



Route::post('/home',[AuthController::class,'login']);

Route::get('/dashboard' ,[DashboadController::class,'index']);


//Room Route
Route::get('/rooms' ,function (){
    $rooms = (new RoomController())->getRoomCard();
    return view('rooms' , ['data'=>$rooms]);
})->name("rooms");

Route::get('/customerCheckOut/{id}/{room_number}',[RoomController::class,'customerCheckOut']);
Route::get('/changeDirtyToClean/{id}',[RoomController::class,'changeDirtyToClean']);
Route::get('/changeFaultToClean/{id}',[RoomController::class,'changeFaultToClean']);


//Order Route

Route::get('/orders' ,function (){
    $order = (new OrderController())->getOrders();
    return view('order',['orders' => $order]);
})->name("order");
Route::get('/cancelOrder/{id}',[OrderController::class,'cancelOrder']);
Route::get('/gettingReadyOrder/{id}',[OrderController::class,'gettingReadyOrder']);
Route::get('/readyOrder/{id}',[OrderController::class,'readyOrder']);



Route::get('/newCustommer',function (){
    $rooms = (new RoomController())->getAvaibleRoom();
    return view('newcustomer',['rooms'=>$rooms]);
});
Route::post('/newCustomerAdd',[CustomerController::class,'newCustomerAdd']);


Route::get('/{param?}', function ($param = 'ok') {
    return view('login',['status'=>$param]);
})->name("login");


