<?php

namespace App\Http\Controllers;

use App\Mail\Welcoming;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function signin()
    {

        return view('auth.signin');
    }

    public function postsignin(Request $request)
    {
        // dd($request->all());

        $email=$request->loginEmail;
        $password=$request->loginPassword;
        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        $dologin=Auth::attempt($credentials);
        dd($dologin);

        if($dologin){
            $user = User::where('email',$email)->first();
            $status = $user->is_active;
            if($status == 0){
                dd("Belum Aktif");
            }
            else{
                dd("Sudah Aktif");
            }
        } else {
            return redirect()->back()->with(['error' => 'Akun Tidak Ditemukan']);
        }


        // return view('auth.signin');
    }

    public function signup()
    {

        return view('auth.signup');
    }

    public function storesignup(Request $request)
    {
        // dd($request->all());
        $namadepan = $request->namadepan;
        $namabelakang = $request->namabelakang;
        $email = $request->email;
        $phone = $request->phone;
        $username = $request->username;
        $password = $request->password;

        $CheckUsername = User::where('name', $username)->count();
        $CheckEmail = User::where('email', $email)->count();
        if($CheckUsername > 0){
            return redirect()->back()->with(['error' => 'Username Sudah digunakan']);
        }
        if($CheckEmail > 0){
            return redirect()->back()->with(['error' => 'Email Sudah digunakan']);
        }


        DB::beginTransaction();
        try{

            if($request->hasFile('uploadfoto')){
                $path_loc = $request->file('uploadfoto');
                $namefile = $path_loc->hashName();
                $url = $path_loc->move('fotoprofil', $namefile);
            } else{
                $url = "";
            }

            $createuser = User::create([
                'name' => $username,
                'firstname' => $namadepan,
                'lastname' => $namabelakang,
                'pathphoto' => $url,
                'phonenumber' => $phone,
                'email' => $email,
                'password' => bcrypt($password),
                'role' => "User",
                'is_active' => 0,
            ]);

            // Kirim Welcoming Email
            // $recipient = $email;
            // $namauser = $namadepan." ".$namabelakang;
            // $sent=Mail::to($recipient)->send(new Welcoming($namauser));

            DB::commit();

            return redirect()->route('signin')->with([
                'success' => 'Pendaftaran Berhasil, Silahkan Login dengan akun anda'
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => 'Pendaftaran Gagal!']);
        }
    }
}
