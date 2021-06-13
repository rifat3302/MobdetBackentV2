<?php


namespace App\Classes;


use App\Enums\TestResult;
use Illuminate\Http\Request;

class Test1Explain extends TestCalculate
{



    static function calculate(Request $request)
    {
        $score = $request->score;
        $sonuc = "";
        if($score>=TestResult::Test1Result1Min && $score<=TestResult::Test1Result1Max)
            $sonuc =  TestResult::Test1Result1;
        if($score>=TestResult::Test1Result2Min && $score<=TestResult::Test1Result2Max)
            $sonuc =  TestResult::Test1Result2;
        if($score>=TestResult::Test1Result3Min && $score<=TestResult::Test1Result3Max)
            $sonuc =  TestResult::Test1Result3;
        if($score>=TestResult::Test1Result4Min && $score<=TestResult::Test1Result4Max)
            $sonuc =  TestResult::Test1Result4;
        if($score>=TestResult::Test1Result5Min && $score<=TestResult::Test1Result5Max)
            $sonuc =  TestResult::Test1Result5;
        if($score>=TestResult::Test1Result6Min)
            $sonuc =  TestResult::Test1Result6;

        if($sonuc=="")
            return "Geçersiz Puanlaama";

        self::saveTestResults($request,$sonuc);

        return $sonuc;
    }
}
