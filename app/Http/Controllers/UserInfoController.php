<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{

    public function getUserInfo(Request $request){

        $customer = Customer::where([
            'id' => $request->user_id
        ])->get()->toArray();
        $response = [];
        foreach ($customer as $c){

            $date = $this->dateDiff($c['exit_date'],$c['entry_date']);
            $total =  $date * $c['amount'];

            $response = [
                'total' => $total == 0 ? $c['amount'] : $total,
                'date' => $date,
                'room_number' => $c['room_number'],
                'name' => $c['name'],
                'surname' =>$c['surname'],
                'exit_date' => $c['exit_date']
            ];

        }

        return response([
            'user_info'=>$response
        ],200);


    }

    function dateDiff ($d1, $d2) {


        return round(abs(strtotime($d1) - strtotime($d2))/86400);

    }

}
