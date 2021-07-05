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
    //Todo burası değişecek isimlendirme farklı olacak
    public function getPlaces(){

        $helper = new GooglePlacesApiHelper();
        $hospital = $helper->getHospitalInfo();
       // $pharmacy = $helper->getPharmacyInfo();
        // Aylık  100 request  hakkı vardır. Yeni maille yeni api key alınmalıdır.
        $pharmacyDuty = $helper->getDutyPharmacy();
        $laundry= $helper->getLaunndry();
        $bank= $helper->getBank();
        $atm= $helper->getAtm();
        $tourist_attraction= $helper->getTouristAttraction();
        $museum= $helper->getMuseum();
        $hairCare= $helper->getHairCare();


        return response([

            'places' => [
                [
                    'id' => 'hospital',
                    'name_head' => 'Hospital',
                    'data' => $hospital,
                    'type' => 1
                ],
                [
                    'id' => 'pharmacy_duty',
                    'name_head' => 'Pharmacy Duty',
                    'data' => $pharmacyDuty,
                    'type'  => 1
                ],
                [
                    'id' => 'laundry',
                    'name_head' => 'Laundry',
                    'data' => $laundry,
                    'type'  => 3
                ],
                [
                    'id' => 'bank',
                    'name_head' => 'Bank',
                    'data' => $bank,
                    'type'  => 1
                ],
                [
                    'id' => 'atm',
                    'name_head' => 'ATM',
                    'data' => $atm,
                    'type'  => 2
                ],
                [
                    'id' => 'tourist_attraction',
                    'name_head' => 'Tourist Attraction',
                    'data' => $tourist_attraction,
                    'type'  => 2
                ],
                [
                    'id' => 'museum',
                    'name_head' => 'Museum',
                    'data' => $museum,
                    'type'  => 2
                ],
                [
                    'id' => 'hair_care',
                    'name_head' => 'Hair Care',
                    'data' => $hairCare,
                    'type'  => 2
                ]
            ]

        ],201);

    }

    public function getTaxi(){
        $helper = new GooglePlacesApiHelper();
        $taxi = $helper->getTaxiInfo();
        return response([
            'taxi' => $taxi
        ],200);
    }

}
