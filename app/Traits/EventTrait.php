<?php
namespace App\Traits;
use GuzzleHttp\Client;

trait EventTrait
{
    public function getEvent($token, $filter)
    {
        $client = new Client();
        $url='http://127.0.0.1:7000/api/event/search';
        $filter = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'event_name' => $filter['event_name'],
                'city' => $filter['city'],
                'from' => $filter['from'],
                'until' => $filter['until'],
                'limit' => $filter['limit']
            ])
        ]); 
        $response = json_decode($filter->getBody()->getContents());
        $response = $response->data;

        return $response;
    }
}
