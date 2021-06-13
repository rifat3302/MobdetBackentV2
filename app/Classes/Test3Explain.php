<?php


namespace App\Classes;


use App\Enums\TestResult;
use Illuminate\Http\Request;

class Test3Explain extends TestCalculate
{

    static function calculate(Request $request)
    {
        $score = $request->score;
        $sonuc = "";
        if($score>=TestResult::Test2Result1Min && $score<=TestResult::Test2Result1Max)
            $sonuc =  TestResult::Test2Result1;
        if($score>=TestResult::Test2Result2Min && $score<=TestResult::Test2Result2Max)
            $sonuc =  TestResult::Test2Result2;
        if($score>=TestResult::Test2Result3Min && $score<=TestResult::Test2Result3Max)
            $sonuc =  TestResult::Test2Result3;
        if($score>=TestResult::Test2Result4Min && $score<=TestResult::Test2Result4Max)
            $sonuc =  TestResult::Test2Result4;
        if($score>=TestResult::Test2Result5Min)
            $sonuc =  TestResult::Test2Result5;
        if($sonuc=="")
            return "Geçersiz Puanlaama";

        self::saveTestResults($request,$sonuc);

        return $sonuc;
    }
}
