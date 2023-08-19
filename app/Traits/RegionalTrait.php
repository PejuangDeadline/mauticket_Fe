<?php
namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait RegionalTrait
{
    public function getTokenRegional()
    {
        $email = 'hris@napinfo.co.id';
        $password = '12345';
        $url = 'https://api.napinfo.co.id/api_regional/api/auth';


        $response = Http::post($url, [
            'email' => $email,
            'password' => $password,
        ]);
        $data = $response['data'];
        $token = $data['token'];

        return $token;
    }

    public function getProvinceRegional($token)
    {
        $ruleApiProvince = 'https://api.napinfo.co.id/api_regional/api/province';
        $getProvince = Http::withToken($token)->get($ruleApiProvince);
        $provinces = $getProvince['data'];

        return $provinces;
    }
}
