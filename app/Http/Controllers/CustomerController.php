<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function newCustomerAdd(Request $request){

        try{
                $willSendSmsData = [];
                foreach ($request->data as $key){
                    $privateKey = $this->generatePrivateKey();
                    $willSendSmsData [] = [
                        'private_key' => $privateKey,
                        'phone' => $key['phone']
                    ];

                    Customer::create([
                        'room_number' => $request->roomNumber,
                        'tc' => $key['tc'],
                        'name' => $key['name'],
                        'surname' => $key['surname'],
                        'phone' => $key['phone'],
                        'private_key' => $privateKey,
                        'entry_date' => date('Y-m-d',strtotime($request->entryDate)),
                        'exit_date' =>  date('Y-m-d',strtotime($request->exitDate)),
                        'amount' => intval( $request->customerCount) > 1 ?
                            floatval(floatval($request->amount)/intval($request->customerCount)) :
                            floatval($request->amount),
                        'active' =>true,
                        'admin_approve' => true,
                        'customer_approve' => false

                    ]);
                }


        }catch (\Exception $exception){
             return response([
               'message' => $exception
             ],401);
        }
        return response([
            'message' => 'ok'
        ],201);


    }

    private function generatePrivateKey($length=4){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
