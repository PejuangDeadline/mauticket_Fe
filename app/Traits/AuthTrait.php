<?php
namespace App\Traits;
use GuzzleHttp\Client;

trait AuthTrait
{
    public function getTokenAPICMS()
    {
        $authUsername='fe@mau.co.id';
        $authPassword='12345';
        $url_login = 'http://154.56.46.3/maukarcis-admin/api/getToken';
        $client = new Client();
        $request = $client->post($url_login, [
            'headers'=> ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'email' => $authUsername,
                'password' => $authPassword,
            ])
        ]);
        $response = json_decode($request->getBody());
        $resp=$response->data;
        $token=$resp->token;

        return $token;
    }

    public function signupData($token, $data)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/signup/store';
        $signup = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'namadepan' => $data['namadepan'],
                'namabelakang' => $data['namabelakang'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'username' => $data['username'],
                'password' => $data['password'],
            ])
        ]); 
        $response = json_decode($signup->getBody()->getContents());

        return $response;
    }

    public function sendToken($token, $id_user, $email)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/send-token';
        $send = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'id_user' => $id_user,
                'email' => $email
            ])
        ]); 
        $response = json_decode($send->getBody()->getContents());

        return $response;
    }

    public function verifyEmail($token, $email, $code)
    {
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/verify-email';
        $verif = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'email' => $email,
                'codeVerif' => $code
            ])
        ]); 
        $response = json_decode($verif->getBody()->getContents());

        return $response;
    }
}
