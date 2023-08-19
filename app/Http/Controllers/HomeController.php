<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

// Trait
use App\Traits\AuthTrait;
use App\Traits\EventTrait;
use App\Traits\RegionalTrait;

class HomeController extends Controller
{
    use AuthTrait;
    use EventTrait;
    use RegionalTrait;

    public function homepage()
    {
        $tokenAPI = $this->getTokenAPICMS();

        $filter = [
            'event_name' => "",
            'city' => "",
            'from' => "",
            'until' => "",
            'limit' => 3
        ];

        $getEvent = $this->getEvent($tokenAPI, $filter);
        $endpointApi = 'http://154.56.46.3/maukarcis-admin/';

        $event_name = "";
        $from = "";
        $until = "";
        $city = "";
        $daterange = "";
        // dd($getEvent);

        $tokenregional = $this->getTokenRegional();
        $provinces = $this->getProvinceRegional($tokenregional);
        
        return view('homepage.index', compact('event_name', 'from', 'until', 'city', 'daterange', 'getEvent', 'endpointApi', 'provinces'));
    }

    public function selectCity($province_id)
    {
        $tokenregional = $this->getTokenRegional();

        $url='https://api.napinfo.co.id/api_regional/api/city';

        // Get List City
        $clientListCity = new Client();
        $data = json_encode(['province_id' => $province_id]);
        $request = $clientListCity->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $tokenregional,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => $data
        ]);

        $response = json_decode($request->getBody());
        $city=$response->data;

        return json_encode($city);
    }
}
