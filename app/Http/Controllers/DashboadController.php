<?php

namespace App\Http\Controllers;

use App\Helpers\DashboardHelpers;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index(){

        $dashBoardHelper = new DashboardHelpers();
        $occupancyRates = $dashBoardHelper->getOccupancyRates();
        $wheatherData = $dashBoardHelper->getWeeklyWheather();
        $currency = $dashBoardHelper->getCurrency();

        $response = [
            'wheatherData' =>$wheatherData,
            'currency' => $currency,
            'occupancyRates'=>$occupancyRates,

        ];
        return view('home',$response);
    }
}
