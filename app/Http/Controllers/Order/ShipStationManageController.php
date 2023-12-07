<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipStationManageController extends Controller
{
    //

    public static function createOrUpdateOrder($arr){
        
        $url = 'https://ssapi.shipstation.com/orders/createorder';

        // ShipStation API credentials
        $api_key = '82a5f20543164f3b8170b664ceec6612';
        $api_secret = '4d5b69dada03445fa789487680a9e540';

        // Encode order data as JSON
        $jsonData = json_encode($arr);
        
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . base64_encode("$api_key:$api_secret"),
            'Content-Type: application/json',
        ]);
        
        // Execute cURL session and get the response
        $response = curl_exec($ch);
        
        curl_close($ch);
        return $response;
    }
}
