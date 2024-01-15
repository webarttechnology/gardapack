<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipStationManageController extends Controller
{
    //

    public static function apiKeys(){
        $api_key = '82a5f20543164f3b8170b664ceec6612';
        $api_secret = '4d5b69dada03445fa789487680a9e540';

        $api = [
            'api_key' => $api_key,
            'api_secret' => $api_secret,
        ];

        return $api;
    }

    public static function createOrUpdateOrder($arr){
        
        $url = 'https://ssapi.shipstation.com/orders/createorder';

        // ShipStation API credentials
        // $api_key = '82a5f20543164f3b8170b664ceec6612';
        // $api_secret = '4d5b69dada03445fa789487680a9e540';

        $api = self::apiKeys();

        // Encode order data as JSON
        $jsonData = json_encode($arr);
        
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            // 'Authorization: Basic ' . base64_encode("$api_key:$api_secret"),
            "Authorization: Basic " . base64_encode("{$api['api_key']}:{$api['api_secret']}"),
            'Content-Type: application/json',
        ]);
        
        // Execute cURL session and get the response
        $response = curl_exec($ch);
        // var_dump($response); exit;
        curl_close($ch);
        return $response;
    }

    public static function getCarriers(){
        $url = "https://ssapi.shipstation.com/carriers";
        $api = self::apiKeys();

        $headers = [
            "Authorization: Basic " . base64_encode("{$api['api_key']}:{$api['api_secret']}"),
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $carriers = json_decode($response, true);

        curl_close($ch);
        return $response;
    }

    public static function getServiceDetails($carrierCode){
        $url = "https://ssapi.shipstation.com/carriers/listservices?carrierCode=$carrierCode";

        $api = self::apiKeys();

        $headers = [
            "Authorization: Basic " . base64_encode("{$api['api_key']}:{$api['api_secret']}"),
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $services = json_decode($response, true);

        curl_close($ch);
        return $services;
    }

    public static function getSpecificServiceRate($arr){
        $url = "https://ssapi.shipstation.com/shipments/getrates";

        $api = self::apiKeys();

        // Encode order data as JSON
        $jsonData = json_encode($arr);
        
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            // 'Authorization: Basic ' . base64_encode("$api_key:$api_secret"),
            "Authorization: Basic " . base64_encode("{$api['api_key']}:{$api['api_secret']}"),
            'Content-Type: application/json',
        ]);
        
        // Execute cURL session and get the response
        $response = curl_exec($ch);
        $rate = json_decode($response, true);
        
        curl_close($ch);
        return $rate;
    }

    /**
     * Get Webhooks
    */

    public static function getWebhooks(){
        $url = "https://ssapi.shipstation.com/webhooks";
        $api = self::apiKeys();

        $headers = [
            "Authorization: Basic " . base64_encode("{$api['api_key']}:{$api['api_secret']}"),
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $carriers = json_decode($response, true);

        curl_close($ch);
        return $response;
    }
}
