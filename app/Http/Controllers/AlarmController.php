<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
{

    public function setAlarm(Request $request){


        $date =   date('Y-m-d H:i:s', strtotime($request->date));

       try{

           Alarm::create([
               'wake_up_time'=>$date,
               'room_number' => 21
           ]);
           return response([
               'message'=>'alarm oluşturuldu',
               'success'=> true
           ],200);



       }catch (\Exception $exception){

           return response([
               'message'=>'alarm oluşturulurken hata',
               'success'=> false
           ],401);
       }



    }

    public function getAllAlarm(){

        $timezone='Europe/Istanbul';
        $date = new \DateTime('now', new \DateTimeZone($timezone));
        return Alarm::where('wake_up_time', '>', $date->format("Y-m-d H:i:s"))
            ->where('awakened',0)
            ->orderBy('wake_up_time', 'DESC')->get()->toArray();

    }

    public function wakeUp($roomNumber){
        Alarm::where('room_number',$roomNumber)
            ->update([
                'awakened'=> 1 ,
            ]);
        return redirect()->route("alarm");
    }

}
