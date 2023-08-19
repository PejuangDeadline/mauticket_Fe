<?php

namespace App\Http\Controllers;

use App\Mail\Welcoming;
use App\Mail\SendCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// Trait
use App\Traits\AuthTrait;

// DB
use App\Models\User;


class AuthController extends Controller
{
    use AuthTrait;

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
                $tokenAPI = $this->getTokenAPICMS();
                $sendToken = $this->sendToken($tokenAPI, $user->id, $email);

                if($sendToken->success=="true"){
                    $email = $sendToken->data->email;
                    $error = $sendToken->data->error;
                    return view('auth.verifemail', compact('email', 'error'));
                } else {
                    return redirect()->back()->with(['error' => 'Maaf Server Sedang Sibuk']);
                }
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
        
        $tokenAPI = $this->getTokenAPICMS();
        $verifEmail = $this->verifyEmail($tokenAPI, $email, $code);

        if($verifEmail->success=="true"){
            return redirect()->route('homepage')->with(['success' => 'Sukses']);
        } else {
            $error = $verifEmail->data->error;
            $email = $verifEmail->data->email;
            return view('auth.verifemail', compact('email', 'error'));
        }
    }

    public function signup()
    {

        return view('auth.signup');
    }

    public function storesignup(Request $request)
    {
        $tokenAPI = $this->getTokenAPICMS();
        $data = $request->except('_token');
        $storedata = $this->signupData($tokenAPI, $data);

        if($storedata->success=="true"){
            return redirect()->route('login')->with([
                'success' => 'Pendaftaran Berhasil, Silahkan Login dengan akun anda'
            ]);
        } else {
            return redirect()->back()->with(['error' => $storedata->data->error]);
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
