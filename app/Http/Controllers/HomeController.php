<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingpage()
    {
        return view('landingpage.index');
    }

    public function listevent()
    {
        return view('landingpage.listevent');
    }

}
