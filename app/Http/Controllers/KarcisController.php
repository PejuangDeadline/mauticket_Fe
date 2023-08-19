<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KarcisController extends Controller
{
    public function karcis()
    {
        $id_user = Auth::user()->id;
        $datauser = User::where('id', $id_user)->first();

        if($datauser->is_active == 0){
            $email = $datauser->email;
            $error = 2;
            return view('auth.verifemail', compact('email', 'error'));
        } else {
            return view('karcis.karcis', compact('datauser'));
        }
    }

    public function listkarcis()
    {

        return view('karcis.listkarcisuser');
    }

    public function karcisuser()
    {
        $id_user = Auth::user()->id;
        $datauser = User::where('id', $id_user)->first();

        return view('karcis.karcisuser', compact('datauser'));
    }
}
