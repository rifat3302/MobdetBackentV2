<?php

namespace App\Http\Controllers;

use App\Models\OrderCart;
use App\Models\OrderUser;
use http\Env\Response;
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

    public function getOrderHistory(Request $request){

        $request->validate([
            'user_id' => 'required',
            'room_number' => 'required'

        ]);

        try{
            $data = [];
            $orders = OrderUser::where('user_id',$request->user_id)
                ->where('room_number',$request->room_number)
                ->orderBy('id', 'DESC')->get();
            if(!empty($orders)){

                foreach ($orders as $order){
                    $orderDetails =[];

                    $ord = DB::table('order_cart')
                        ->select(

                            'order_cart.order_user_id',
                            'order_cart.menu_id',
                            'menu.name',
                            'order_cart.menu_sub_id',
                            'order_cart.count',
                            'order_cart.total'
                        )
                        ->join('menu', 'menu.id', '=', 'order_cart.menu_id')
                        ->where('order_cart.order_user_id', $order->id)
                        ->orderBy('menu_sub_id', 'ASC')->get();


                   foreach ($ord as  $od){

                       $orderDetails  [] =  [

                           'order_user_id' => $od->order_user_id,
                           'menu_id' => $od->menu_id,
                           'menu_sub_id' => $od->menu_sub_id,
                           'name' => $od->name,
                           'count' => $od->count,
                           'total' => $od->total,
                       ];
                   }
                    $data [] = [
                        'order'  => $order->toArray(),
                        'order_details' =>$orderDetails

                    ];
                   $a = 0;

                }
            }
            return Response([
                'data'=>$data
            ],201);


        }catch (\Exception $e){

            $response = [
                'message'=> 'fail'
            ];

            return response($response,403);

        }


    }
}
