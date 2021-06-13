<?php


namespace App\Classes;

use App\Models\TestResults;
use Illuminate\Http\Request;

abstract  class TestCalculate
{

    abstract static function calculate(Request $request);

    public static function saveTestResults(Request $request,$sonuc){

        try{
            TestResults::create([
                'user_id' => $request->user_id,
                'test_id' => $request->test_id,
                'test_name' => $request->test_name,
                'score' =>$request->score,
                'test_created_at' => date("Y-m-d h:i:s",strtotime("now")),
                'test_sonuc_text' => $sonuc,
            ]);
        }catch (\Exception $exception){

        }



    }

}
