<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\Registered;
use App\Biodata;
use App\SocialMedia;
use App\Networth;
use App\Family;
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

    public function updateBiodataPost(Request $request,$user_id){
        
        Biodata::where('user_id','=',$user_id)->where('scholarship_id','=',$request->scholarship_id)->update([
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

        SocialMedia::where('user_id','=',$user_id)->where('scholarship_id','=',$request->scholarship_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
        ]);

        return redirect()->route('familyForm');
    }
    // End Biodata

    // Family
    public function familyForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        if(Networth::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateFamilyForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataKeluarga')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function familyPost(Request $request){
        // Father
        Family::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'status' => $request->father,
            'name' => $request->father_name,
            'gender' => $request->father_sex,
            'birthplace' => $request->father_birthplace,
            'birthdate' => $request->father_birthdate,
            'education' => $request->father_education,
            'job' => $request->father_job,
        ]);
        // End Father

        // Mother
        Family::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'status' => $request->mother,
            'name' => $request->mother_name,
            'gender' => $request->mother_sex,
            'birthplace' => $request->mother_birthplace,
            'birthdate' => $request->mother_birthdate,
            'education' => $request->mother_education,
            'job' => $request->mother_job,
        ]);
        // End Mother

        // Child
        $count = count($request->child_name);
        for($i = 0; $i < $count; $i++){
            Family::create([
                'user_id' => Auth::user()->id,
                'scholarship_id' => $request->scholarship_id,
                'status' => "Anak ".strval($i+1),   
                'name' => $request->child_name[$i],
                'gender' => $request->child_sex[$i],
                'birthplace' => $request->child_birthplace[$i],
                'birthdate' => $request->child_birthdate[$i],
                'education' => $request->child_education[$i],
                'job' => $request->child_job[$i],
            ]);
        }
        // End Child

        Networth::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'networth' => $request->earnings,
        ]);

        return redirect()->route('educationForm');
    }

    public function updateFamilyForm($user_id){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $families = Family::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $networth = Networth::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first();
        return view('pendaftaran.update.formDataKeluarga')->with([
            'families' => $families,
            'networth' => $networth
        ]);
    }

    public function updateFamilyPost(Request $request, $user_id){
        // Father
        Family::find($request->father_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'status' => $request->father,
            'name' => $request->father_name,
            'gender' => $request->father_sex,
            'birthplace' => $request->father_birthplace,
            'birthdate' => $request->father_birthdate,
            'education' => $request->father_education,
            'job' => $request->father_job,
        ]);
        // End Father

        // Mother
        Family::find($request->mother_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'status' => $request->mother,
            'name' => $request->mother_name,
            'gender' => $request->mother_sex,
            'birthplace' => $request->mother_birthplace,
            'birthdate' => $request->mother_birthdate,
            'education' => $request->mother_education,
            'job' => $request->mother_job,
        ]);
        // End Mother

        // Child
        $count = count($request->child_name);
        for($i = 0; $i < $count; $i++){
            if($request->child_id[$i] != NULL){
                Family::find($request->child_id[$i])->update([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'status' => "Anak ".strval($i+1),   
                    'name' => $request->child_name[$i],
                    'gender' => $request->child_sex[$i],
                    'birthplace' => $request->child_birthplace[$i],
                    'birthdate' => $request->child_birthdate[$i],
                    'education' => $request->child_education[$i],
                    'job' => $request->child_job[$i],
                ]);
            }
            elseif($request->child_name[$i] != NULL){
                Family::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'status' => "Anak ".strval($i+1),   
                    'name' => $request->child_name[$i],
                    'gender' => $request->child_sex[$i],
                    'birthplace' => $request->child_birthplace[$i],
                    'birthdate' => $request->child_birthdate[$i],
                    'education' => $request->child_education[$i],
                    'job' => $request->child_job[$i],
                ]);
            }
        }
        // End Child

        Networth::find($request->networth_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'networth' => $request->earnings,
        ]);

        return redirect()->route('educationForm');
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
