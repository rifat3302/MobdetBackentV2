<?php

namespace App\Http\Controllers;

use App\Helpers\DashboardHelpers;
use Illuminate\Http\Request;

class MobilDashboardController extends Controller
{
    private $_DashboardHelper;

    /**
     * @return mixed
     */
    public function getDashboardHelper()
    {
        return $this->_DashboardHelper;
    }

    /**
     * @param mixed $DashboardHelper
     */
    public function setDashboardHelper($DashboardHelper)
    {
        $this->_DashboardHelper = $DashboardHelper;
    }

    public function __construct()
    {
        $this->setDashboardHelper(new DashboardHelpers());
    }

    public function getOccupancy(){

        return response(
            ['data' => $this->getDashboardHelper()->getOccupancyRates() ],201
        );

    }

}
