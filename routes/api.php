<?php

use App\Http\Controllers\MobilDashboardController;
use App\Http\Controllers\RoomInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\RoomController;
use \App\Http\Controllers\HelpersController;
use \App\Http\Controllers\MenuController;
use \App\Http\Controllers\OrderController;
use App\Models\rooms;
use App\Http\Controllers\GooglePlacesController;
use App\Http\Controllers\TestAnswerController;
use App\Http\Controllers\PlacesController;
use \App\Http\Controllers\AlarmController;
use \App\Http\Controllers\UserInfoController;

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
Route::post('/qrControl', [RoomController::class,'controlQrKey']);
Route::post('/logoutControlServiceForMobile',[RoomController::class,'logoutControlServiceForMobile']);

Route::get('/pushOrder',function (){
    broadcast(new \App\Events\WebSocketDemoEvent('some data'));
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

//Mobil Routes

Route::get('/mobilDashboardOccupancy',[MobilDashboardController::class,'getOccupancy']);
Route::get('/mobilMenu',[MenuController::class,'getAllMenu']);
Route::post('/saveOrder', [OrderController::class,'saveOrder']);
Route::post('/getOrderHistory', [OrderController::class,'getOrderHistory']);

Route::get('/getNearbyPlaces', [GooglePlacesController::class,'getNearbyPlaces']);
Route::get('/getPlaces', [GooglePlacesController::class,'getPlaces']);
Route::get('/getTaxi', [GooglePlacesController::class,'getTaxi']);
Route::post('/controlPlacesQrKey',[PlacesController::class,'controlPlacesQrKey']);
Route::post('/setAlarm',[AlarmController::class,'setAlarm']);
Route::post('/getUserInfo',[UserInfoController::class,'getUserInfo']);
Route::get('/getRoomInfo',[RoomInfoController::class,'getRoomInfo']);


//Mobdet
Route::post('/loginMD', [AuthController::class,'loginMD']);
Route::post('/getTestAnswer', [TestAnswerController::class,'getTestAnswer']);
Route::get('/getTests', [TestAnswerController::class,'getTests']);
Route::post('/getExplain',[TestAnswerController::class,'getExplain']);
Route::post('/getHistoryTest',[TestAnswerController::class,'getHistoryTest']);





















//protected routes
Route::group(['middleware' =>['auth:sanctum']],function (){

    Route::get('selam',[AuthController::class,'index']);
    Route::post('logout' ,[AuthController::class,'logout']);

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
