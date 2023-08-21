<?php
namespace App\Traits;
use GuzzleHttp\Client;

trait ChartTrait
{
    public function getChart($token, $id_user)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/chart/view/'.$id_user;
        $chart = $client->get($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ]
        ]); 
        $response = json_decode($chart->getBody()->getContents());

        return $response;
    }

    public function deleteChart($token, $id)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/chart/delete/'.$id;
        $deletechart = $client->get($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ]
        ]); 
        $response = json_decode($deletechart->getBody()->getContents());

        return $response;
    }
}
