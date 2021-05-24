<?php

namespace App\Http\Controllers;

use App\Helpers\GooglePlacesApiHelper;
use Illuminate\Http\Request;

class GooglePlacesController extends Controller
{

    public function getNearbyPlaces(){

        $helper = new GooglePlacesApiHelper();
        return  $helper->getNearbyPlaces();

    }
    public function getTaxiInfo(){

        $helper = new GooglePlacesApiHelper();
        $taxi = $helper->getTaxiInfo();
        $hospital = $helper->getHospitalInfo();
        //$pharmacy = $helper->getPharmacyInfo();
        // Aylık  100 request  hakkı vardır. Yeni maille yeni api key alınmalıdır.
        $pharmacyDuty = $helper->getDutyPharmacy();
        $laundry= $helper->getLaunndry();
        $bank= $helper->getBank();
        $atm= $helper->getAtm();
        $tourist_attraction= $helper->getTouristAttraction();
        $museum= $helper->getMuseum();
        $hairCare= $helper->getHairCare();
        $a =0;

        return response([
            'taxi' => $taxi,
            'hospital' => $hospital,
            'pharmacyDuty'=>  $pharmacyDuty,
            'laundry' => $laundry,
            'bank' => $bank,
            'atm' => $atm ,
            'tourist_attraction' => $tourist_attraction ,
            'museum' => $museum,
            'hairCare' => $hairCare

        ],201);

    }

}
