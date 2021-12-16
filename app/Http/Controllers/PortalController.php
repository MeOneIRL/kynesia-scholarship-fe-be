<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Fund;

class PortalController extends Controller
{
    //
    public function homePortal(){
        return view('portal.homePortal');
    }

    // Profile
    public function profilePortal(){
        $profile = Profile::where('user_id', '=', Auth::user()->id)->first();
        // dd($profile->id);
        return view('portal.profilePortal')->with(['profile' => $profile]);
    }

    public function profilePortalPost(Request $request){
        // dd($request->all());
        Profile::find($request->user_id)->update([
            "name" => $request->name,
            "birthplace" => $request->birthplace,
            "birthdate" => $request->birthdate,
            "address" => $request->address,
            "postalCode" => $request->postalCode,
            "district" => $request->district,
            "city" => $request->city,
            "province" => $request->province,
            "email" => $request->email,
            "telephone" => $request->telephone,
            "phoneNumber" => $request->handphone,
            "bank" => $request->bank,
            "bankNumber" => $request->bankNumber,
            "university" => $request->university,
            "major" => $request->major,
        ]);
        return redirect()->route('profilePortal');
    }
    // End Profile

    // Pencairan Dana
    public function fundingPortal(){
        $fundings = Fund::where([['user_id', '=', Auth::user()->id],
                                 ['status', '=', 1]])->get();
        return view('portal.riwayatPencairan')->with(['fundings' => $fundings]);
    }
    // End Pencairan Dana
}
