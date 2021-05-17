<?php

use App\Http\Controllers\MobilDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DashboadController;

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

/*Route::post('/home', function () {
    return view('home', ['name' => 'James']);
})*/



Route::post('/home',[AuthController::class,'login']);

Route::get('/dashboard' ,[DashboadController::class,'index']);

Route::get('/newCustommer',function (){
    $rooms = (new RoomController())->getAvaibleRoom();
    return view('newcustomer',['rooms'=>$rooms]);
});
Route::post('/newCustomerAdd',[CustomerController::class,'newCustomerAdd']);


Route::get('/{param?}', function ($param = 'ok') {
    return view('login',['status'=>$param]);
})->name("login");


