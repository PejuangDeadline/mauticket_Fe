<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarcisController extends Controller
{
    public function karcis()
    {

        return view('karcis.karcis');
    }

    public function listkarcis()
    {

        return view('karcis.listkarcisuser');
    }

    public function karcisuser()
    {

        return view('karcis.karcisuser');
    }
}
