<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use  App\Models\rooms;
use function PHPUnit\Framework\isEmpty;

class RoomController extends Controller
{

    public function login(Request $request){

        $field  = $request->validate([
            'qr_key' => 'required|string',
            'private_key' => 'required|string',
        ]);

       try{

           $customer = Customer::where('private_key',$field['private_key'])
               ->where('admin_approve',1)
               ->where('customer_approve',1)->first();

           if($customer){
               $room = rooms::where([
                   ['qr_key','=',$field['qr_key']],
               ])->first();

               if($room['room_number']==$customer['room_number']){
                   Customer::where('id',$customer['id'])
                       ->update([
                           'customer_approve'=> 1
                       ]);
                   return response([
                       'message' => 'success',
                       'data' => ['user'=>$customer]
                   ],201);

               }else {
                   throw new \Exception("Customer or room is different",1002);
               }

           }else{
               throw new \Exception("This user not found or This user already login",1001);
           }

       }catch (\Exception  $exception){

           return response([
               'message' => $exception->getMessage(),
               'data' => null
           ],201);

       }


    }

    public function getAvaibleRoom(){

        return rooms::where('isClean',true)
            ->where('isBook',false)
            ->where('isActive',true)->pluck('room_number')->toArray();

    }

    public function getRoomCard(){
        $sendData = [];
        $rooms = rooms::all();
        $rooms = $rooms->toArray();
        foreach ($rooms as $room){
            if($room['isBook']==1){
                $user = Customer::where([
                    ['room_number', '=', $room['room_number']],
                    ['active', '=', 1],

                ])->get();
                $sendUserData = [];
                $sendUserDataUser = [];
                foreach ($user->toArray() as $u){
                    $sendUserDataUser [] = [
                        'id'  => $u['id'],
                        'nameSurname' => $u['name']." ".$u['surname']
                    ];
                }
                $sendUserData['user'] = $sendUserDataUser;
                $sendUserData['amount'] = $user->toArray()[0]['amount'];
                $sendUserData['entry'] = $user->toArray()[0]['entry_date'];
                $sendUserData['exit'] = $user->toArray()[0]['exit_date'];


                $sendData [] = [
                    'room' => $room,
                    'user' => $sendUserData
                ];

            }else{
                $room['url']=env("IMAGE_QR_API_URL").$room['url'];
                $sendData [] = [
                    'room' => $room,
                    'user' => null
                ];
            }
        }

        return $this->parseRoom($sendData);

    }

    private function parseRoom($data){

        $chunk_count = intval(count($data)/5)+1;
        return array_chunk($data,$chunk_count);

    }

    public function customerCheckOut($id,$room_number){


        //Todo Checkout yapıldığında siparişlerinide sil kullanıcıyı
        //  sil lastuserlara ekle log için  ayrıca checkout sayfasında
        // ne  kadar  ödeme yapılacağı göster
        rooms::where('id',$id)
            ->update([
                'isBook'=> 0 ,
                'isClean'=> 0
            ]);

        Customer::where([
            ['room_number',"=",$room_number],
            ['active',"=",1]
        ])->update([
            'room_number' => null,
            'active' =>0
        ]);

        return redirect()->route("rooms");
    }

    public function changeDirtyToClean($id){

        rooms::where('id',$id)
            ->update([
                'isClean'=> 1,
                'isBook' => 0
            ]);

        return redirect()->route("rooms");
    }

    public function changeFaultToClean($id){

        rooms::where('id',$id)
            ->update([
                'isClean'=> 1,
                'isBook' => 0,
                'isActive' => 1,
            ]);

        return redirect()->route("rooms");
    }

    public function controlQrKey(Request $request){

        $field  = $request->validate([
            'qr_key' => 'required|string',
        ]);

        $qrList = rooms::all()->pluck('qr_key')->toArray();
        $control = array_search($field['qr_key'],$qrList,true);
        if($control!==false){
            return response([
                'message'=>'success'
            ],201);
        }else {
            return response([
                'message'=>'This qr code is not used'
            ],400);
        }


    }

    public function logoutControlServiceForMobile(Request $request){

         $user = Customer::where('active',true)
            ->where('id',$request->id)->get();

         $a  = 0;

    }
}
