<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\Registered;
use App\Biodata;
use App\SocialMedia;
use Auth;

class UserController extends Controller
{
    // Biodata
    public function biodataForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        if(Biodata::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateBiodataForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataPribadi')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function biodataPost(Request $request){
        if($request->checking_address == "same"){
            Biodata::create([
                'user_id' => Auth::user()->id,
                'scholarship_id' => $request->scholarship_id,
                'name' => $request->full_name,
                'nickname' => $request->nickname,
                'gender' => $request->sex,
                'birthplace' => $request->birthplace,
                'birthdate' => $request->birthdate,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'idType' => $request->id_type,
                'idNumber' => $request->id_number,
                'addressID' => $request->address,
                'postCodeID' => $request->code,
                'districtID' => $request->district,
                'cityID' => $request->city,
                'provinceID' => $request->province,
                'addressLiving' => $request->address,
                'postCodeLiving' => $request->code,
                'districtLiving' => $request->district,
                'cityLiving' => $request->city,
                'provinceLiving' => $request->province,
                'entrance' => $request->entrance_type,
                'entranceNumber' => $request->text_id,
                'major' => $request->major,
                'university' => $request->university,
            ]);

            SocialMedia::create([
                'user_id' => Auth::user()->id,
                'scholarship_id' => $request->scholarship_id,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'tiktok' => $request->tiktok,
            ]);

            Registered::create([
                'user_id' => Auth::user()->id,
                'scholarship_id' => $request->scholarship_id,
                'statusOne' => "Proses Pendaftaran",
            ]);

            return redirect()->route('familyForm');
        }

        Biodata::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'name' => $request->full_name,
            'nickname' => $request->nickname,
            'gender' => $request->sex,
            'birthplace' => $request->birthplace,
            'birthdate' => $request->birthdate,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'idType' => $request->id_type,
            'idNumber' => $request->id_number,
            'addressID' => $request->address,
            'postCodeID' => $request->code,
            'districtID' => $request->district,
            'cityID' => $request->city,
            'provinceID' => $request->province,
            'addressLiving' => $request->living_address,
            'postCodeLiving' => $request->living_code,
            'districtLiving' => $request->living_district,
            'cityLiving' => $request->living_city,
            'provinceLiving' => $request->living_province,
            'entrance' => $request->entrance_type,
            'entranceNumber' => $request->text_id,
            'major' => $request->major,
            'university' => $request->university,
        ]);

        SocialMedia::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
        ]);

        Registered::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'statusOne' => "Proses Pendaftaran",
        ]);

        return redirect()->route('familyForm');

    }

    public function updateBiodataForm($user_id){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $biodata = Biodata::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first();
        $socialMedia = SocialMedia::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first();
        return view('pendaftaran.update.formDataPribadi')->with([
            'biodata' => $biodata,
            'socialMedia' => $socialMedia
        ]);
    }

    public function updateBiodataPost($user_id){

    }
    // End Biodata

    // Family
    public function familyForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        return view('pendaftaran.formDataKeluarga')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function familyPost(Request $request){
        dd($request->all());
    }
    // End Family

    // Education
    public function educationForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        return view('pendaftaran.formDataPendidikan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function educationPost(Request $request){
        dd($request->all());
    }
    // End Education

    // Downloadable
    public function downloadableForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        return view('pendaftaran.formUnduhan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function downloadablePost(Request $request){
        dd($request->all());
    }
    // End Downloadable

    public function onlineTest(){
        $scholarship = Scholarship::where('status','=',1)->first();
        return view('pendaftaran.tesOnline')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function onlineInterview(){
        return view('pendaftaran.wawancara');
    }


}
