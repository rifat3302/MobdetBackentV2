<?php


namespace App\Helpers;
use App\Models\occupancy_rates;

class DashboardHelpers
{

    private $_dollar;

    /**
     * @return mixed
     */
    public function getDollar()
    {
        return $this->_dollar;
    }

    /**
     * @param mixed $dollar
     */
    public function setDollar($dollar)
    {
        $this->_dollar = $dollar;
    }
    public function __construct()
    {
    }
    //Kurlar çekilmektedir.
    public function  getCurrency(){
        return $this->getRequestForCurrency();
    }

    public function getRequestForCurrency(){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://kur.doviz.com/api/v5/converterItems');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Authority: kur.doviz.com';
        $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"89\", \"Chromium\";v=\"89\", \";Not A Brand\";v=\"99\"';
        $headers[] = 'Accept: */*';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://kur.doviz.com/';
        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if($result!=""){
           return  $this->neccesaryCurrency($result);
        }

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

    }

    public function neccesaryCurrency($result){

        $response = [];
        $result=json_decode($result,1);
        $currency = $result[0];
        $coins = $result[2];
        $neccesaryCur= $this->currency();
        foreach ($currency as $index =>$cry){
            if(array_search($cry['code'],$neccesaryCur)){
                if($cry['code']=='USD'){
                    $this->setDollar($cry['selling']);
                }
                $response[$cry['code']] = floatval( number_format((float)$cry['selling'], 2, '.', ''));

            }
        }
        $coinsName = $this->coins();
        try{
            foreach ($coins as $c){
                if(!empty($c['code'])){
                    if(array_search($c['code'],$coinsName)){

                        $response[$c['code']] = intval(floatval($this->getDollar())*floatval($c['selling']));
                    }
                }

            }
        }catch (\Exception $exception){
            return null;
        }
        return $response;


    }

    public function currency(){

        return ['COP','EUR','USD','GBP','JPY','AED','SEK','RUB','CNY','AZN','SAR'];
    }
    public function  coins(){

        return ['cindicator','bitcoin','ethereum'];
    }

    //Hava Durumu çekilmektedir

    /**
     * Burada illerin plaka numarasına göre istek atılabilir
     * Örnek 9-06(plaka kodu)-01 90601
     * Bu ödevde izmir kullanılacaktır 93501
     */
    public function getWeeklyWheather($disticnt_id = 93501){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://servis.mgm.gov.tr/web/tahminler/gunluk?istno='.$disticnt_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"89\", \"Chromium\";v=\"89\", \";Not A Brand\";v=\"99\"';
        $headers[] = 'Accept: application/json, text/plain, */*';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
        $headers[] = 'Origin: https://www.mgm.gov.tr';
        $headers[] = 'Sec-Fetch-Site: same-site';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://www.mgm.gov.tr/';
        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if($result!=""){
            $result = json_decode($result,1);
            return $this->prepareWheatherData($result[0]);
        }
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }

    public function lastStatusWhether($id=93501){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://servis.mgm.gov.tr/web/sondurumlar?merkezid='.$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"89\", \"Chromium\";v=\"89\", \";Not A Brand\";v=\"99\"';
        $headers[] = 'Accept: application/json, text/plain, */*';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36';
        $headers[] = 'Origin: https://www.mgm.gov.tr';
        $headers[] = 'Sec-Fetch-Site: same-site';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://www.mgm.gov.tr/';
        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if($result!=""){
            return json_decode($result,1)[0];
        }
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }

    public function prepareWheatherData($result){

        $response=[];

        $response['Day1']['lower']=$result['enDusukGun1'];
        $response['Day1']['higher']=$result['enYuksekGun1'];
        $response['Day1']['wind']=$result['ruzgarHizGun1'];
        $response['Day1']['Day']=date('l', strtotime($result['tarihGun1']));
        $response['Day1']['imagePath'] = $this->prepareHtmlTemplete($result['hadiseGun1']);

        $response['Day2']['lower']=$result['enDusukGun2'];
        $response['Day2']['higher']=$result['enYuksekGun2'];
        $response['Day2']['wind']=$result['ruzgarHizGun2'];
        $response['Day2']['Day']=date('l', strtotime($result['tarihGun2']));
        $response['Day2']['imagePath'] = $this->prepareHtmlTemplete($result['hadiseGun2']);

        $response['Day3']['lower']=$result['enDusukGun3'];
        $response['Day3']['higher']=$result['enYuksekGun3'];
        $response['Day3']['wind']=$result['ruzgarHizGun3'];
        $response['Day3']['Day']=date('l', strtotime($result['tarihGun3']));
        $response['Day3']['imagePath'] = $this->prepareHtmlTemplete($result['hadiseGun3']);

        $response['Day4']['lower']=$result['enDusukGun4'];
        $response['Day4']['higher']=$result['enYuksekGun4'];
        $response['Day4']['wind']=$result['ruzgarHizGun4'];
        $response['Day4']['Day']=date('l', strtotime($result['tarihGun4']));
        $response['Day4']['imagePath'] = $this->prepareHtmlTemplete($result['hadiseGun4']);

        $response['Day5']['lower']=$result['enDusukGun5'];
        $response['Day5']['higher']=$result['enYuksekGun5'];
        $response['Day5']['wind']=$result['ruzgarHizGun5'];
        $response['Day5']['Day']=date('l', strtotime($result['tarihGun5']));
        $response['Day5']['imagePath'] = $this->prepareHtmlTemplete($result['hadiseGun5']);

        $lastStatus = $this->lastStatusWhether();
        $response['Day6']['imagePath'] = $this->prepareHtmlTemplete($lastStatus['hadiseKodu']);
        $response['Day6']['temperature'] = $lastStatus['sicaklik'];
        $response['Day6']['Day']=date('l', strtotime('now'));
        $hour = strval(intval(date('H', strtotime('now')))+3);
        $min = strval(date('i',strtotime('now')));
        $response['Day6']['Hour']=$hour.':'.$min;
        $response['Day6']['location']='IZMIR';

        return $response;

    }

    public function prepareHtmlTemplete($action){

        switch ($action){

            case 'G' : //Güneşli
                return '128/day_clear.png';
            case 'PB' :
                return '128/day_partial_cloud.png';
            case 'AB' :
                return'128/cloudy.png';
            case 'GSY' :
                return '128/rain_thunder.png';
            case 'MSY' :
                return '128/rain.png';
            case 'SY' :
                return '128/day_rain.png';
            case 'CB' :
                return '128/cloudy.png';
            default:
                return '128/day_clear.png';

        }

    }

    //Doluluk Oranları Çekililyor

    public function getOccupancyRates(){

        $occupancyRates = occupancy_rates::all();
        $occupancyRates = $occupancyRates[0]->toArray();
        $result['pool'] = ['ca'=>$occupancyRates['pool_capacity'],'co'=>$occupancyRates['pool_count'],'percent' =>
        intval(floatval(100/intval($occupancyRates['pool_capacity']))*intval($occupancyRates['pool_count']))
        ];
        $result['pub'] = ['ca'=>$occupancyRates['pub_capacity'],'co'=>$occupancyRates['pub_count'],'percent' =>
            intval(floatval(100/intval($occupancyRates['pub_capacity']))*intval($occupancyRates['pub_count']))
        ];
        $result['sauna'] = ['ca'=>$occupancyRates['sauna_capacity'],'co'=>$occupancyRates['sauna_count'],'percent' =>
            intval(floatval(100/intval($occupancyRates['sauna_capacity']))*intval($occupancyRates['sauna_count']))
        ];
        $result['restaurant'] = ['ca'=>$occupancyRates['restaurant_capacity'],'co'=>$occupancyRates['restaurant_count'],'percent' =>
            intval(floatval(100/intval($occupancyRates['restaurant_capacity']))*intval($occupancyRates['restaurant_count']))
        ];
        $result['gym'] = ['ca'=>$occupancyRates['gym_capacity'],'co'=>$occupancyRates['gym_count'],'percent' =>
            intval(floatval(100/intval($occupancyRates['gym_capacity']))*intval($occupancyRates['gym_count']))
        ];
        $result['hotel'] = ['ca'=>$occupancyRates['hotel_capacity'],'co'=>$occupancyRates['hotel_count'],'percent' =>
            intval(floatval(100/intval($occupancyRates['hotel_capacity']))*intval($occupancyRates['hotel_count']))
        ];
        return $result;

    }


}
