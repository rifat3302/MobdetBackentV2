<?php

namespace App\Http\Controllers;

use App\Models\OrderCart;
use App\Models\OrderUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function saveOrder(Request $request){


        try{
            $data = $request->json()->all();

            $order = OrderUser::create([

                'user_id' => $data['user_data']['user_id'],
                'room_number' => $data['user_data']['room_number'],
                'total' => $data['user_data']['total'],
                'state' => $data['user_data']['state'],
                'order_date' => date('Y-m-d H:i:s' ,strtotime('now'))

            ]);
            if(!empty($data['order_data'])){
                foreach ($data['order_data'] as $key){

                    OrderCart::create([
                        'user_id' => $data['user_data']['user_id'],
                        'room_number' => $data['user_data']['room_number'],
                        'order_user_id' => $order->id,
                        'menu_id' => $key['menu_id'],
                        'menu_sub_id' => $key['menu_sub_id'],
                        'count' => $key['count'],
                        'total' => $key['total']
                    ]);

                }
            }


            $response = [
                'message'=> 'success'
            ];

            return response($response,201);


        }catch (\Exception $exception){
            $response = [
                'message'=> 'fail'
            ];

            return response($response,403);
        }

    }
}
