<?php

namespace App\Http\Controllers;

use App\Models\PlacesUserCross;
use App\Models\rooms;
use Illuminate\Http\Request;
use App\Models\Customer;
use Twilio\Rest\Client;

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

                    $customer = Customer::create([
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
                    $id = $customer->id;
                    PlacesUserCross::create([
                        'user_id'=>$id
                    ]);

                    rooms::where('room_number',intval($request->roomNumber))
                        ->update([
                            'isBook' =>1,
                            'isClean' => 0
                        ]);
                    if(!$this->sendSmsPrivateKey($key['phone'],$privateKey)){
                        throw new \Exception("Dont send private key via sms",29000);
                    }
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
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function sendSmsPrivateKey($phone,$privateKey){

        try{
        $client = new Client(env("ACCOUNT_SID"), env("AUTH_TOKEN"));

        $client->messages->create(
            $phone,
            array(
                "from" => env("TWILIO_PHONE_NUMBER"),
                "body" => "Welcome to our hotel. Your private key is"." $privateKey"
            ));
            }catch (\Exception $exception){
            return false;
        }
        return true;



    }
}
