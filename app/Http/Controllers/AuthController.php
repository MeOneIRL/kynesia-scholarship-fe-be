<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\Scholarship;
use App\Registered;
use Validator;

class AuthController extends Controller
{
    public function homePageAccount(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $registered = Registered::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first();
        return view('pendaftaran.homePendaftaran')->with([
            'scholarship' => $scholarship,
            'registered' => $registered,
        ]);
    }

    // register
    public function registerAccountForm(){
        return view('pendaftaran.daftarPendaftaran');
    }

    public function registerAccountPost(Request $request){
        User::create([
            'name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_token' => sha1(time()),
            'status' => 0,
            'role' => 0,
        ]);

        return redirect()->route('loginAccountForm');
    }

    public function verifyAccount($verify_token){
        $user = User::where('verify_token','=',$verify_token)->first();
        if($user == NULL){
            return redirect()->route('loginAccountForm')->with(['message' => "Akun Tidak Ditemukan"]);
        }

        $user->status = 1;
        $user->verify_token = NULL;
        $user->save();

        return redirect()->route('loginAccountForm')->with(['message' => "Verifikasi Berhasil"]);
    }
    // end register

    // login
    public function loginAccountForm(){
        return view('pendaftaran.masukPendaftaran');
    }

    public function loginAccountPost(Request $request){
        $credentials=[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard()->attempt($credentials)){
            return redirect()->route('homeAccount');
        }

        return redirect()->back()->with(['message' => "Email Atau/Dan Password Yang Anda Masukan Salah"]);
    }
    // end login

    // logout
    public function logoutAccount(){
        Auth::logout();

        return redirect()->route('home');
    }
    // end logout
}
