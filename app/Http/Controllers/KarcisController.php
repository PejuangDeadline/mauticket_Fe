<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarcisController extends Controller
{
    public function karcis()
    {

        return view('karcis.karcis');
    }
}
