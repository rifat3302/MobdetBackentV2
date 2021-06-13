<?php

namespace App\Http\Controllers;

use App\Classes\Test1Explain;
use App\Classes\Test2Explain;
use App\Classes\Test3Explain;
use App\Models\Answers;
use App\Models\TestResults;
use App\Models\Tests;
use App\Models\Test;
use Illuminate\Http\Request;

class TestAnswerController extends Controller
{

    public function getTestAnswer(Request $request){
        $returnTest = [];
       $test = Tests::where('id',$request->test_id)->get();
       foreach ($test->toArray() as $t){

        $test = Test::where('test_id',$t['id'])->get();
        $questions  = [];
        foreach ($test->toArray() as $te){

            $answer = Answers::where([
                'question_id'=>$te['question_id'],
                'test_id' => $t['id']

            ])->get();
            $answer = $answer->toArray();
            $questions  [] = [
                'mDQuestion' => $te,
                'answer' =>$answer
            ];

        }

        $t['questions'] = $questions;

        $returnTest  [] = [
            'MobdetTest' =>  $t
        ];
       }
       return  response([
           'message' => 'success',
           'data' => $returnTest
       ],200);

    }

    public function getTests(){
        $returnData = [];

        $test = Tests::all()->toArray();
        foreach ($test as $t){

            $returnData [] =  [
                'test_id' => $t['id'],
                'test_name' => $t['test_name']
            ];

        }
        return response([
            'message' => 'success',
            'data' => $returnData
        ],200);
    }
    public function getExplain(Request $request){

        switch ($request->test_id){

            case 1 :
                return response(['result' => Test1Explain::calculate($request)],200);
                break;
            case 2 :
                return response(['result' => Test2Explain::calculate($request)],200);
            case 3 :
                return response(['result' => Test3Explain::calculate($request)],200);
                break;
            default:
                return null;
                break;
        }

    }
    public function getHistoryTest(Request $request){

        try{

            $data =  TestResults::where('user_id',$request->user_id)
                ->orderBy('test_created_at', 'DESC')->get()->toArray();

            return response([
                'testHistory' => $data
            ],200);

        }catch (\Exception $ex){

            $a = 0;
        }

    }

}
