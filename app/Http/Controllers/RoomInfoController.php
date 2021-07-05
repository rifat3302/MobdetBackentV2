<?php

namespace App\Http\Controllers;

use App\Models\RoomInfo;
use Illuminate\Http\Request;

class RoomInfoController extends Controller
{
    public function getRoomInfo(){

        $returnData =  RoomInfo::all();
        return response([
            'roomInfo' => $returnData
        ],201);

    }
}
