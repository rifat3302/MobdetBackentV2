<?php

namespace App\Http\Controllers;

use App\Models\occupancy_rates;
use App\Models\Place;
use App\Models\PlacesUserCross;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function controlPlacesQrKey(Request $request){

        $field  = $request->validate([
            'user_id' => 'required|integer',
            'qr_key' => 'required|string',
        ]);

        $place =  Place::where('qr_key',$request->qr_key)->get();
        if(!empty($place->toArray())){
           $user = PlacesUserCross::where('user_id',123)->get();
            if(!empty($user->toArray())){

                if($place[0]['type']==1){
                    if($place[0]['name']=="Pool"){
                        if($user[0]['pool']==0){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'pool'=>1
                                ]);
                            $this->increaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first exit the place you want to enter',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Pub"){
                        if($user[0]['pub']==0){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'pub'=>1
                                ]);
                            $this->increaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first exit the place you want to enter',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Sauna"){
                        if($user[0]['sauna']==0){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'sauna'=>1
                                ]);
                            $this->increaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first exit the place you want to enter',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Restaurant"){
                        if($user[0]['restaurant']==0){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'restaurant'=>1
                                ]);
                            $this->increaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first exit the place you want to enter',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Gym"){
                        if($user[0]['gym']==0){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'gym'=>1
                                ]);
                            $this->increaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first exit the place you want to enter',
                                'name' => null
                            ],401);
                        }
                    }

                }
                if($place[0]['type']==2){
                    if($place[0]['name']=="Pool"){
                        if($user[0]['pool']==1){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'pool'=>0
                                ]);
                            $this->decreaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first enter the place you want to exit',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Pub"){
                        if($user[0]['pub']==1){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'pub'=>0
                                ]);
                            $this->decreaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first enter the place you want to exit',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Sauna"){
                        if($user[0]['sauna']==1){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'sauna'=>0
                                ]);
                            $this->decreaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first enter the place you want to exit',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Restaurant"){
                        if($user[0]['restaurant']==1){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'restaurant'=>0
                                ]);
                            $this->decreaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first enter the place you want to exit',
                                'name' => null
                            ],401);
                        }
                    }
                    if($place[0]['name']=="Gym"){
                        if($user[0]['gym']==1){
                            PlacesUserCross::where('user_id',$user[0]['user_id'])
                                ->update([
                                    'gym'=>0
                                ]);
                            $this->decreaseOccupancy($place[0]['name']);
                            return response([
                                'message'=>'success',
                                'name' => $place[0]['name']
                            ],200);

                        }else{
                            return response([
                                'message'=>'You must first enter the place you want to exit',
                                'name' => null
                            ],401);
                        }
                    }

                }

            }else{
                return response([
                    'message'=>'This user isnt active',
                    'name' => null
                ],401);
            }

        }else{
            return response([
                'message'=>'Wrong Key',
                'name' => null
            ],401);
        }

    }

    private function increaseOccupancy($name){

        switch ($name){
            case "Pool" :
              $oc = occupancy_rates::find(1);
              $oc->pool_count = intval($oc->pool_count)+1;
              $oc->save();

            case "Pub" :
                $oc = occupancy_rates::find(1);
                $oc->pub_count = intval($oc->pub_count)+1;
                $oc->save();

            case "Sauna" :
                $oc = occupancy_rates::find(1);
                $oc->sauna_count = intval($oc->sauna_count)+1;
                $oc->save();

            case "Restaurant" :
                $oc = occupancy_rates::find(1);
                $oc->restaurant_count = intval($oc->restaurant_count)+1;
                $oc->save();

            case "Gym" :
                $oc = occupancy_rates::find(1);
                $oc->gym_count = intval($oc->gym_count)+1;
                $oc->save();
            default :
                break;

        }
    }

    private function decreaseOccupancy($name){

        switch ($name){
            case "Pool" :
                $oc = occupancy_rates::find(1);
                $oc->pool_count = intval($oc->pool_count) == 0 ? 0 : intval($oc->pool_count)-1;
                $oc->save();

            case "Pub" :
                $oc = occupancy_rates::find(1);
                $oc->pub_count = intval($oc->pub_count) == 0 ? 0 : intval($oc->pub_count)-1;
                $oc->save();

            case "Sauna" :
                $oc = occupancy_rates::find(1);
                $oc->sauna_count = intval($oc->sauna_count) == 0 ? 0 : intval($oc->sauna_count)-1;
                $oc->save();

            case "Restaurant" :
                $oc = occupancy_rates::find(1);
                $oc->restaurant_count = intval($oc->restaurant_count) == 0 ? 0 : intval($oc->restaurant_count)-1;
                $oc->save();

            case "Gym" :
                $oc = occupancy_rates::find(1);
                $oc->gym_count = intval($oc->gym_count) == 0 ? 0 : intval($oc->gym_count)-1;
                $oc->save();
            default :
                break;

        }
    }
}
