<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use DB;

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
        $endpointApi = 'http://127.0.0.1:7000/';

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

    public function detailevent()
    {

        return view('event.detailevent');
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $keyword = $request->keyword;
        $state = $request->state;
        $daterange = $request->daterange;

        return view('event.listevent', compact('keyword', 'state', 'daterange'));
    }
}
