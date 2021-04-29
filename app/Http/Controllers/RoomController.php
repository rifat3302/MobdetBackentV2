<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\rooms;

class RoomController extends Controller
{

    public function login(Request $request){

        $field  = $request->validate([
            'qr_key' => 'required|string',
            'private_key' => 'required|string',
        ]);

        $room = rooms::where('qr_key',$field['qr_key'])->where('private_key',$field['private_key'])->first();

        if(!$room){
            return response([
                'message' => 'Bad creds'
            ],401);
        }


        $response = [
            'room' => $room,
        ];
        return response($response,201);
    }

    public function getAvaibleRoom(){

        return rooms::where('isClean',true)
            ->where('isBook',false)
            ->where('isActive',true)->pluck('room_number')->toArray();

    }
}
