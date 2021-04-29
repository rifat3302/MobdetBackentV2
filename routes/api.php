<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\RoomController;
use \App\Http\Controllers\HelpersController;
use App\Models\rooms;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//MobilHotelRoutes
Route::post('/MHlogin', [RoomController::class,'login']);

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});

//Hepler Route
Route::get('/GC', [HelpersController::class,'getCurrency']);


//Public Routes
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/test',[AuthController::class,'test']);
Route::get('/room',function (){

    return rooms::all();
});
































//protected routes
Route::group(['middleware' =>['auth:sanctum']],function (){

    Route::get('selam',[AuthController::class,'index']);
    Route::post('logout' ,[AuthController::class,'logout']);

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
