<?php


namespace App\Helpers;


use Illuminate\Support\Facades\Http;
use League\Flysystem\Config;

class GooglePlacesApiHelper
{

    public function __construct()
    {
    }

    /**
     * @param float $latitude
     * @param float $longitude
     * @param $radius
     *
     * Şuanki evin konumumu  $latitude  38.37243978867742 ,  $longitude  27.18414316441775
     * arama yapılacak yerin yarıçapı 1000
     *
     */
    public function getNearbyPlaces($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=10000){

        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&radius='.$radius
                .'&type=taxi_stand'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }
            return response([
                'data' => $response->json(),
                'message' => 'success'
            ],201);

        }catch (\Exception $exception){

            return response([
                'data' => null,
                'message' => $exception->getMessage()

            ],403);
        }

    }

    public function getTaxiInfo($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=5000){

        $returnTaxiData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=taxi_stand'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){

               $taxiResponse = Http::get('https://maps.googleapis.com/maps/api/place/details/json?'
                .'place_id='.$res['place_id']
                .'&fields=name,rating,formatted_phone_number'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
                );
               if(!empty($taxiResponse->json()['result']['formatted_phone_number'])){
                   $returnTaxiData [] = $taxiResponse->json()['result'];
               }
               if(count($returnTaxiData)>=5){
                   break;
               }
            }

           return $returnTaxiData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getHospitalInfo($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=5000){

        $returnHospitalData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=hospital'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnHospitalData [] = $res;
                if(count($returnHospitalData)>=10){
                    break;
                }
            }

            return $returnHospitalData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getPharmacyInfo($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=5000){

        $returnPharmacyData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=pharmacy'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnPharmacyData [] = $res;
                if(count($returnPharmacyData)>=10){
                    break;
                }
            }

            return $returnPharmacyData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getLaunndry($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=10000){

        $returnLaundryData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=laundry'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }


            $response = $response->json()['results'];

            foreach ($response as $res){

                $laundryResponse = Http::get('https://maps.googleapis.com/maps/api/place/details/json?'
                    .'place_id='.$res['place_id']
                    .'&fields=name,rating,formatted_phone_number'
                    .'&key='.env('GOOGLE_PLACES_API_KEY')
                );
                if(!empty($laundryResponse->json()['result']['formatted_phone_number'])){
                    $returnLaundryData [] = $laundryResponse->json()['result'];
                }
                if(count($returnLaundryData)>=5){
                    break;
                }
            }

            return $returnLaundryData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getAtm($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=5000){

        $returnAtmData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=atm'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnAtmData [] = $res;
                if(count($returnAtmData)>=10){
                    break;
                }
            }

            return $returnAtmData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getBank($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=5000){

        $returnBankData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=bank'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnBankData [] = $res;
                if(count($returnBankData)>=10){
                    break;
                }
            }

            return $returnBankData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getTouristAttraction($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=50000){

        $returnTouristAttractionData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=tourist_attraction'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnBankData [] = $res;
                if(count($returnTouristAttractionData)>=10){
                    break;
                }
            }

            return $returnTouristAttractionData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getMuseum($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=100000){

        $returnMuseumData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=museum'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnMuseumData [] = $res;
                if(count($returnMuseumData)>=10){
                    break;
                }
            }

            return $returnMuseumData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getHairCare($latitude=38.37243978867742,$longitude=27.18414316441775,$radius=100000){

        $returnHairCareData = [];
        try{
            $response = Http::get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='
                .$latitude.','.$longitude
                .'&rankby=distance'
                .'&type=hair_care'
                .'&key='.env('GOOGLE_PLACES_API_KEY')
            );
            if($response->json()['status']=='REQUEST_DENIED'){
                throw new \Exception("Couldn't receive data in googlge api",28000);
            }

            $response = $response->json()['results'];

            foreach ($response as $res){
                $returnHairCareData [] = $res;
                if(count($returnHairCareData)>=10){
                    break;
                }
            }

            return $returnHairCareData;

        }catch (\Exception $exception){

            return null;
        }

    }

    public function getDutyPharmacy(){
        $dutyPharmacy =  [];
        $pharmacy = $this->getDutyPharmacyCurl();
        foreach ($pharmacy as $pharm){
            $lonlat = explode(",",$pharm['loc']);
            $distance = $this->distance(
                38.37243978867742,
                27.18414316441775,
               floatval( $lonlat[0]),
               floatval( $lonlat[1]),
                'K'
            );
            if($distance<5){
                $dutyPharmacy []  =  $pharm;
            }
        }
        return $dutyPharmacy;

    }

    private function getDutyPharmacyCurl($discrict='Izmir'){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.collectapi.com/health/dutyPharmacy?il='.$discrict);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Authorization: apikey '.env('COLLECTAPI_KEY');
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return json_decode($result,1)['result'];

    }

    /**
     * @param $lat1
     * @param $lon1
     * @param $lat2
     * @param $lon2
     * @param $unit
     * @return float
     * İki nookta  arası yeri kuş bakışı hesaplar
     */
    public function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

}
