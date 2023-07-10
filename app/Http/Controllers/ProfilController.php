<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;
        $datauser = User::where('id', $id_user)->first();

        return view('profil.profil', compact('datauser'));
    }

    public function edit(Request $request)
    {
        // dd($request->all());
        $id_user = Auth::user()->id;
        $datauserbefore = User::where('id', $id_user)->first();

        $datauserbefore->firstname = $request->namadepan;
        $datauserbefore->lastname = $request->namabelakang;
        $datauserbefore->name = $request->username;
        $datauserbefore->phonenumber = $request->phonenumber;

        if($datauserbefore->isDirty()){
            $checkusername = User::where('name', $request->username)->where('id', '!=', $id_user)->count();
            if($checkusername > 0){
                return redirect()->back()->with(['error' => 'Username sudah digunakan!']);
            } else {
                $update = User::where('id', $id_user)->update([
                    'firstname' => $request->namadepan,
                    'lastname' => $request->namabelakang,
                    'name' => $request->username,
                    'phonenumber' => $request->phonenumber
                ]);
                return redirect()->back()->with(['success' => 'Data berhasil diperbaharui']);
            }
        } else {
            return redirect()->back()->with(['success' => 'Data tidak ada yang diperbaharui!']);
        }
    }

    public function changepw(Request $request)
    {
        // dd($request->all());
        $id_user = Auth::user()->id;
        $datauser = User::where('id', $id_user)->first();

        $passworddb = $datauser->password;
        $passwordbefore = $request->passwordbefore;
        $passwordnew = $request->password;
        $passwordconfirm = $request->confirmpassword;

        if (!Hash::check($passwordbefore, $passworddb)) {
            return redirect()->back()->with(['error' => 'Kata Sandi Salah!']);
        }

        if (preg_match('/\s/', $passwordnew)) {
            return redirect()->back()->with(['error' => 'Kata Sandi Tidak Boleh Mengandung Spasi!']);
        }
        
        $lengthpw = strlen($passwordnew);
        if($lengthpw < 8){
            return redirect()->back()->with(['error' => 'Kata Sandi Terlalu Pendek!']);
        }

        if($passwordnew != $passwordconfirm){
            return redirect()->back()->with(['error' => 'Kata Sandi Baru Tidak Cocok!']);
        } else {
            $update = User::where('id', $id_user)->update([
                'password' => Hash::make($passwordnew)
            ]);

            return redirect()->back()->with(['success' => 'Kata Sandi Berhasil Dirubah']);
        }
    }
}
