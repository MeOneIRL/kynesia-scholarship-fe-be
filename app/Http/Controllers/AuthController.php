<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\Scholarship;
use App\Registered;
use Validator;
use App\Mail\Verification;
use App\Mail\ResetPassword;
use App\Mail\Help;
use Illuminate\Support\Facades\Mail;
use App\Faq;

class AuthController extends Controller
{
    public function homePageAccount(){
        if(Auth::user()->role == 0){
            $scholarship = Scholarship::where('status' , '=' , 1)->first();

            if(Registered::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() == NULL){
                $registered =Registered::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $scholarship->id,
                    'statusOne' => "Proses Pendaftaran",
                ]);
                
                return view('pendaftaran.homePendaftaran')->with([
                    'scholarship' => $scholarship,
                    'registered' => $registered,
                ]);
            }

            $registered = Registered::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first();
            return view('pendaftaran.homePendaftaran')->with([
                'scholarship' => $scholarship,
                'registered' => $registered,
            ]);
        }

        elseif(Auth::user()->role == 1){
            return redirect()->route('homeAdmin');
        }
        elseif(Auth::user()->role == 2){
            return redirect()->route('homePortal');
        }
    }

    // register
    public function registerAccountForm(){
        return view('pendaftaran.daftarPendaftaran');
    }

    public function registerAccountPost(Request $request){
        $message = [
            'required' => "Bagian Ini Perlu Diisi",
            'unique' => "Email Sudah Terpakai",
            'min' => "Password Minimal 8 Karakter",
            'confirmed' => "Password Tidak Valid",
        ];

        $validator = Validator::make($request->all(),[
            'email' => ('required|unique:users'),
            'password' => ('required|string|min:8|confirmed'),
        ],$message);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_token' => sha1(time()), 
            'status' => 0,
            'role' => 0,
        ]);

        Mail::to($user->email)->send(new Verification($user->verify_token));

        return redirect()->route('loginAccountForm')->with(['message' => "Cek Email Untuk Verifikasi Akun"]);
    }

    public function verifyAccount($verify_token){
        $user = User::where('verify_token','=',$verify_token)->first();
        if($user == NULL){
            return redirect()->route('loginAccountForm')->with(['message' => "Akun Tidak Ditemukan"]);
        }

        if($user->status == 1){
            return redirect()->route('loginAccountForm')->with(['message' => "Akun Sudah Terverifikasi"]);
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
            if(Auth::user()->status == NULL){
                Auth::logout();
                return redirect()->back()->with(['message' => "Akun Belum Terverifikasi"]);
            }

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

    // Reset Password
    public function emailForm(){
        return view('pendaftaran.emailForm');
    }

    public function emailPost(Request $request){
        $user = User::where('email', '=', $request->email)->first();

        if($user == NULL){
            return redirect()->back()->with(['message' => "Email Anda Tidak Terdaftar"]);
        }

        $user->password_token = sha1(time());
        $user->save();

        Mail::to($user->email)->send(new ResetPassword($user->password_token));

        return redirect()->back()->with(['message' => "Silahkan Cek Email Anda Untuk Reset Password"]);
    }

    public function passwordForm($token){
        return view('pendaftaran.passwordForm')->with(['token' => $token]);
    }

    public function passwordPost(Request $request, $token){
        $user = User::where('password_token', '=', $token)->first();

        if($user == NULL){
            return redirect()->back()->with(['message' => 'Link Yang Anda Masukan Salah']);
        }

        $user->password = Hash::make($request->password);
        $user->password_token = NULL;
        $user->save();

        return redirect()->route('loginAccountForm')->with(['message' => 'Silahkan Login Menggunakan Password Yang Baru']);
    }
    // End Password

    // Help
    public function helpForm(){
        $faqs = Faq::get();
        return view('bantuan')->with(['faqs' => $faqs]);
    }

    public function helpPost(Request $request){
        Mail::to("ghemaallan@gmail.com")->send(new Help($request->sender, $request->content, $request->name));
        return redirect()->back();
    }
    // End Help
}
