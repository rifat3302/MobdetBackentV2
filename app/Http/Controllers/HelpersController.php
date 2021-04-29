<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DashboardHelpers;

class HelpersController extends Controller
{

    private $_dahboardHelper;

    /**
     * @return mixed
     */
    public function getDahboardHelper()
    {
        return $this->_dahboardHelper;
    }

    /**
     * @param mixed $dahboardHelper
     */
    public function setDahboardHelper($dahboardHelper)
    {
        $this->_dahboardHelper = $dahboardHelper;
    }


    public function __construct()
    {
        $this->setDahboardHelper(new DashboardHelpers());
    }

    public function getCurrency(){

       return  $this->getDahboardHelper()->getCurrency();

    }
    public function getWeather(){
        return $this->getDahboardHelper()->getWeeklyWheather();
    }

}
