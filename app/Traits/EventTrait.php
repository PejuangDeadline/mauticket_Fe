<?php
namespace App\Traits;
use GuzzleHttp\Client;

trait EventTrait
{
    public function getEvent($token, $filter)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/event/search';
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

    public function getEventDetail($token, $id)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/event/'.$id;
        $filter = $client->get($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ]
        ]); 
        $response = json_decode($filter->getBody()->getContents());
        $response = $response->data;

        return $response;
    }

    public function addChart($token, $data, $id_user)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/chart/add';
        $add = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'id_ticket_category' => $data['id_ticket_category'],
                'id_user' => $id_user,
                'id_event' => $data['id_event'],
                'id_showtime' => $data['id_showtime'],
                'price' => $data['price'],
                'qty' => $data['qty']
            ])
        ]);
        
        $response = json_decode($add->getBody()->getContents());

        return $response;
    }
}
