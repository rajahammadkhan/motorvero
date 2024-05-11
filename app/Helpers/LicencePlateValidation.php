<?php

namespace App\Helpers;


class LicencePlateValidation{
    public static function ValidateLicensePlate($licensePlate, $state)
    {
        $response = '';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://zylalabs.com/api/87/get+vin+from+license+plate+api+-+us+only/143/get+vin+details?license_plate='.$licensePlate.'&state='.$state,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.config('zyla.license_plate_api')
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return  json_decode($response,true);
    }


    public static function ValidateVin($vinNumber)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://zylalabs.com/api/749/extended+vin+decoder+api+-+us/466/vin+decoding?vin='.$vinNumber,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 1552|w6WmEBQ1y8yb17LjK21fIsW2gH0cuhx2GqA5T2iO'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response ,true);

    }
}

