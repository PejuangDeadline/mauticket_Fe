<?php

namespace App\Http\Controllers;

use App\Mail\Welcoming;
use App\Mail\SendCode;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with(['error' => 'Email / Password Salah']);
        }

        $dologin=Auth::attempt($credentials);

        if($dologin){
            $user = User::where('email',$email)->first();
            $status = $user->is_active;
            if($status == 0){
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                $token = substr(str_shuffle($characters), 0, 5);

                //Update token
                $updatetoken = User::where('id',$user->id)->update(['remember_token' => $token]);

                //Send Token to Email
                $sent=Mail::to($email)->send(new SendCode($token));

                $error = 0;
                return view('auth.verifemail', compact('email', 'error'));
            }
            // Akun Sudah Aktif
            else{
                //update last login
                $update_lastlogin=User:: where('email',$email)
                ->update([
                    'last_login' => now(),
                    'login_counter' => $user->login_counter+1,
                ]);

                return redirect()->route('homepage');
            }
        } else {
            return redirect()->back()->with(['error' => 'Akun Tidak Ditemukan']);
        }
    }

    public function verifemail(Request $request)
    {
        $email = decrypt($request->email);
        $code = $request->codeVerif;

        $user = User::where('email', $email)->first();
        if($code == $user->remember_token){
            // Update Is Active User
            $update = User::where('email', $email)->update(['is_active'=>1]);

            return redirect()->route('homepage')->with(['success' => 'Sukses']);
        } else {
            $error = 1;
            return view('auth.verifemail', compact('email', 'error'));
        }
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

            $createuser = User::create([
                'name' => $username,
                'firstname' => $namadepan,
                'lastname' => $namabelakang,
                'phonenumber' => $phone,
                'email' => $email,
                'password' => Hash::make($password),
                'role' => "User",
                'is_active' => 0,
            ]);

            // Kirim Welcoming Email
            $recipient = $email;
            $namauser = $namadepan." ".$namabelakang;
            $sent=Mail::to($recipient)->send(new Welcoming($namauser));

            DB::commit();

            return redirect()->route('login')->with([
                'success' => 'Pendaftaran Berhasil, Silahkan Login dengan akun anda'
            ]);

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => 'Pendaftaran Gagal!']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with([
            'success' => 'Berhasil Keluar'
        ]);
    }
}
