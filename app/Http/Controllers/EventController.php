<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    public function listevent()
    {
        $keyword = null;
        $state = null;
        $daterange = null;

        return view('event.listevent', compact('keyword', 'state', 'daterange'));
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
