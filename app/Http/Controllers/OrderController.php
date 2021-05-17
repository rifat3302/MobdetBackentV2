<?php

namespace App\Http\Controllers;

use App\Models\OrderUser;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function saveOrder(Request $request){


        try{

            $order = OrderUser::create([

                'user_id' => $request->user_id,
                'room_number' => $request->room_number,
                'total' => $request->total,
                'state' => $request->state,
                'order_date' => date('Y-m-d h:i:s' ,strtotime('now'))

            ]);
            $a=0;

        }catch (\Exception $exception){
            $a=0;
        }

    }
}
