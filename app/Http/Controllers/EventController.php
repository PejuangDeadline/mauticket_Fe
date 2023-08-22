<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ClientException;
use App\Models\User;


// Trait
use App\Traits\AuthTrait;
use App\Traits\EventTrait;
use App\Traits\RegionalTrait;

class EventController extends Controller
{
    use AuthTrait;
    use EventTrait;
    use RegionalTrait;

    public function listevent(Request $request)
    {
        if($request->daterange == null){
            $daterange = "";
            $from = "";
            $until = "";
            $limit = 9;
        } else {
            $daterange = $request->daterange;
            $from = $request->start_date;
            $until = $request->end_date;
            $limit = 0;
        }
        if($request->keyword == null){
            $event_name = "";
        } else {
            $event_name = $request->keyword;
        }
        if($request->state == null){
            $city = "";
        } else {
            $city = $request->state;
        }

        if($request->province == null){
            $pr = null;
        } else {
            $pr = $request->province;
        }

        $filter = [
            'event_name' => $event_name,
            'city' => $city,
            'from' => $from,
            'until' => $until,
            'limit' => $limit
        ];

        // dd($filter);
        $tokenAPI = $this->getTokenAPICMS();
        $getEvent = $this->getEvent($tokenAPI, $filter);
        $endpointApi = 'http://154.56.46.3/maukarcis-admin/';

        $tokenregional = $this->getTokenRegional();
        $provinces = $this->getProvinceRegional($tokenregional);

        //Pagination
        $items = collect($getEvent); // Convert your array into a collection
        $page = request()->get('page', 1); // Get the current page or default to 1
        $perPage = 6;
        $offset = ($page * $perPage) - $perPage;
        $currentItems = $items->slice($offset, $perPage)->all(); // Get current items (for the given page)
        $getEvents = new LengthAwarePaginator($currentItems, count($items), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view('event.listevent', compact('event_name', 'from', 'until', 'city', 'daterange', 'getEvents', 'endpointApi', 'provinces', 'pr'));
    }

    public function detailevent($id)
    {
        $tokenAPI = $this->getTokenAPICMS();
        $getEventDetail = $this->getEventDetail($tokenAPI, $id);

        $endpointApi = 'http://154.56.46.3/maukarcis-admin/';
        // dd($getEventDetail);

        return view('event.detailevent', compact('getEventDetail', 'endpointApi'));
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $keyword = $request->keyword;
        $state = $request->state;
        $daterange = $request->daterange;

        return view('event.listevent', compact('keyword', 'state', 'daterange'));
    }

    public function getCategory(Request $request)
    {
        $idEvent = $request->idEvent;
        $showtime_start = $request->showtime_start;

        $tokenAPI = $this->getTokenAPICMS();
        $client = new Client();
        $url='http://154.56.46.3/maukarcis-admin/api/showtime';
        $filter = $client->post($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $tokenAPI,
                'Content-Type' => 'application/json', 
                'Accept' => 'application/json'
            ],
            'body' => json_encode([
                'id_event' => $idEvent,
                'showtime' => $showtime_start
            ])
        ]); 
        $response = json_decode($filter->getBody()->getContents());
        $response = $response->data->showtimes;

        return $response;
    }

    public function storeChart(Request $request)
    {
        $id_user = Auth::user()->id;
        $datauser = User::where('id', $id_user)->first();

        if($datauser->is_active == 0){
            $email = $datauser->email;
            $error = 2;
            return view('auth.verifemail', compact('email', 'error'));
        } else {
            $data = $request->except('_token');
            $tokenAPI = $this->getTokenAPICMS();

            try {
                $storechart = $this->addChart($tokenAPI, $data, $id_user);

                if ($storechart->success == true) {
                    // Handle the successful API response
                    session()->flash('itemAddedToCart', true);
                    return redirect()->back();
                } else {
                    // Handle the unsuccessful API response
                    session()->flash('itemFailedAddToCart', true);
                    return redirect()->back();
                }
            } catch (ClientException $e) {
                session()->flash('itemFailedAddToCart', true);
                return redirect()->back();
            } catch (\Exception $e) {
                session()->flash('itemFailedAddToCart', true);
                return redirect()->back();
            }
        }
    }
}
