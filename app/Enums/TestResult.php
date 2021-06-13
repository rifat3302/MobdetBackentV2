<?php

namespace App\Enums;

final class TestResult
{
    const Test1Result1 =   "Bu inişler ve çıkışlar normal kabul edilir.";
    const Test1Result1Min =  1;
    const Test1Result1Max =  10;

    const Test1Result2 =   "Hafif duygudurum bozukluğu";
    const Test1Result2Min = 11;
    const Test1Result2Max = 16;

    const Test1Result3 =   "Sınırda klinik depresyon";
    const Test1Result3Min =  17;
    const Test1Result3Max =  20;

    const Test1Result4 =   "Orta derecede depresyon";
    const Test1Result4Min = 21;
    const Test1Result4Max = 30;

    const Test1Result5 =   "Ağır depresyon";
    const Test1Result5Min = 31;
    const Test1Result5Max =  40;

    const Test1Result6 =   "Aşırı depresyon";
    const Test1Result6Min = 41;




    const Test2Result1 =   "Minimum kaygı düzeyleri";
    const Test2Result1Min =  0;
    const Test2Result1Max =  7;

    const Test2Result2 =   "Hafif kaygı";
    const Test2Result2Min = 8;
    const Test2Result2Max = 15;

    const Test2Result3 =   "Orta düzeyde kaygı";
    const Test2Result3Min = 16;
    const Test2Result3Max = 25;

    const Test2Result4 =   "Şiddetli kaygı";
    const Test2Result4Min = 26;
    const Test2Result4Max = 63;

    const Test2Result5 =   "Çok Şiddetli kaygı";
    const Test2Result5Min =  64;


}
