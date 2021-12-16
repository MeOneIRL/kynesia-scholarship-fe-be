<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\Registered;
use App\Biodata;
use App\SocialMedia;
use App\Networth;
use App\Family;
use App\Achievement;
use App\Education;
use App\Language;
use App\Organization;
use App\Talent;
use App\Training;
use App\Downloadable;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{
    // Biodata
    public function biodataForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $registered = Registered::where([['scholarship_id', '=', $scholarship->id],
                                        ['user_id', '=', Auth::user()->id]])->first();
        if($registered->statusOne != "Proses Pendaftaran"){
            return redirect()->back()->with(['message' => "Anda Sudah Tidak Dapat Mengganti Data Administrasi"]);
        }
        elseif(Biodata::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateBiodataForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataPribadi')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function biodataPost(Request $request){
        if($request->checking_address == "same"){

            $message = ([
                "required" => "Bagian Ini Perlu Diisi",
                "numeric" => "Data Harus Berupa Angka",
                "min" => "Data Minimal 5 Digit",
                "max" => "Data Maksimal 16 Digit",
                "digits_between" => "Nomor Telephone Minimal 10 dan Maksimal 13 Angka",
            ]);

            $validator = Validator::make($request->all(),[
                'full_name' => ('required'),
                'nickname' => ('required'),
                'sex' => ('required'),
                'birthplace' => ('required'),
                'birthdate' => ('required'),
                'telephone' => ('required|numeric|digits_between:10,13'),
                'email' => ('required'),
                'id_type' => ('required'),
                'id_number' => ('required|min:5|max:16'),
                'address' => ('required'),
                'code' => ('required|numeric|digits:5'),
                'district' => ('required'),
                'city' => ('required'),
                'province' => ('required'),
                'entrance_type' => ('required'),
                'text_id' => ('required'),
                'major' => ('required'),
                'university' => ('required'),
            ],$message);

            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
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



            $user = User::find(Auth::user()->id);
            $user->name = $request->full_name;
            $user->save();

            return redirect()->route('familyForm');
        }

        $message = ([
            "required" => "Bagian Ini Perlu Diisi",
            "numeric" => "Data Harus Berupa Angka",
            "min" => "Data Minimal 5 Digit",
            "max" => "Data Maksimal 16 Digit",
            "digits_between" => "Nomor Telephone Minimal 10 dan Maksimal 13 Angka",
        ]);

        $validator = Validator::make($request->all(),[
            'full_name' => ('required'),
            'nickname' => ('required'),
            'sex' => ('required'),
            'birthplace' => ('required'),
            'birthdate' => ('required'),
            'telephone' => ('required|numeric|digits_between:10,13'),
            'email' => ('required'),
            'id_type' => ('required'),
            'id_number' => ('required|min:5|max:16'),
            'address' => ('required'),
            'code' => ('required|numeric|digits:5'),
            'district' => ('required'),
            'city' => ('required'),
            'province' => ('required'),
            'living_address' => ('required'),
            'living_code' => ('required|numeric|digits:5'),
            'living_district' => ('required'),
            'living_city' => ('required'),
            'living_province' => ('required'),
            'entrance_type' => ('required'),
            'text_id' => ('required'),
            'major' => ('required'),
            'university' => ('required'),
        ],$message);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
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


        $user = User::find(Auth::user()->id);
        $user->name = $request->full_name;
        $user->save();

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
        $registered = Registered::where([['scholarship_id', '=', $scholarship->id],
                        ['user_id', '=', Auth::user()->id]])->first();
        if($registered->statusOne != "Proses Pendaftaran"){
            return redirect()->back()->with(['message' => "Anda Sudah Tidak Dapat Mengganti Data Administrasi"]);
        }
        elseif(Networth::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateFamilyForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataKeluarga')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function familyPost(Request $request){

        $message = [
            'required' => 'Data Diatas Harus Diisi'
        ];

        $validator = Validator::make($request->all(),[
            'father_name' => ('required'),
            'father_sex' => ('required'),
            'father_birthplace' => ('required'),
            'father_birthdate' => ('required'),
            'father_education' => ('required'),
            'father_job' => ('required'),
            'mother_name' => ('required'),
            'mother_sex' => ('required'),
            'mother_birthplace' => ('required'),
            'mother_birthdate' => ('required'),
            'mother_education' => ('required'),
            'mother_job' => ('required'),   
            'earnings' => ('required'),   
        ],$message);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

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
        // dd($request->all());
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
            if(isset($request->child_id[$i])){
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
            else{
                if(isset($request->child_name[$i])){
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
        $registered = Registered::where([['scholarship_id', '=', $scholarship->id],
                        ['user_id', '=', Auth::user()->id]])->first();
        if($registered->statusOne != "Proses Pendaftaran"){
            return redirect()->back()->with(['message' => "Anda Sudah Tidak Dapat Mengganti Data Administrasi"]);
        }
        elseif(Education::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateEducationForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataPendidikan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function educationPost(Request $request){
        // dd($request->all());
        $message = [
            'required' => "Data Ini Harus Diisi",
        ];

        $validator = Validator::make($request->all(),[
            'elementary_name' => ('required'),
            'elementary_province' => ('required'),
            'elementary_city' => ('required'),
            'elementary_enter' => ('required'),
            'elementary_graduate' => ('required'),
            'junior_name' => ('required'),
            'junior_province' => ('required'),
            'junior_city' => ('required'),
            'junior_enter' => ('required'),
            'junior_graduate' => ('required'),
            'high_name' => ('required'),
            'high_province' => ('required'),
            'high_city' => ('required'),
            'high_enter' => ('required'),
            'high_graduate' => ('required'),
        ],$message);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // SD
        Education::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->elementary,
            'name' => $request->elementary_name,
            'province' => $request->elementary_province,
            'city' => $request->elementary_city,
            'enter' => $request->elementary_enter,
            'graduate' => $request->elementary_graduate,
        ]);
        // End SD

        // SMP
        Education::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->junior,
            'name' => $request->junior_name,
            'province' => $request->junior_province,
            'city' => $request->junior_city,
            'enter' => $request->junior_enter,
            'graduate' => $request->junior_graduate,
        ]);
        // End SMP

        // SMA
        Education::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->high,
            'name' => $request->high_name,
            'province' => $request->high_province,
            'city' => $request->high_city,
            'enter' => $request->high_enter,
            'graduate' => $request->high_graduate,
        ]);
        // End SMA

        // Training
        $count = count($request->training_name);
        for($i = 0; $i < $count; $i++){
            if($request->training_name[$i] != NULL){

                Training::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'name' => $request->training_name[$i],
                    'period' => $request->training_period[$i],
                    'year' => $request->training_year[$i],
                    'organizer' => $request->training_organizer[$i],
                    'certificate' => $request->training_certificate[$i],
                ]);
            }
        }
        // End Training

        // Achievement
        $count = count($request->achievement_name);
        for($i = 0; $i < $count; $i++){
            if($request->achievement_name[$i] != NULL){

                Achievement::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id[$i],
                    'name' => $request->achievement_name[$i],
                    'organizer' => $request->achievement_organizer[$i],
                    'level' => $request->achievement_level[$i],
                ]);
            }
        }
        // End Achievement

        // Language
        $count = count($request->language);
        for($i = 0; $i < $count; $i++){
            if($request->language[$i] != NULL){


                Language::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'language' => $request->language[$i],
                    'talk' => $request->language_talk[$i],
                    'write' => $request->language_write[$i],
                    'read' => $request->language_read[$i],
                    'listen' => $request->language_listen[$i],
                ]);
            }
        }
        // End Language

        // Organization
        $count = count($request->organization_name);
        for($i = 0; $i < $count; $i++){
            if($request->organization_name[$i] != NULL){


                Organization::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'name' => $request->organization_name[$i],
                    'period' => $request->organization_period[$i],
                    'position' => $request->organization_position[$i],
                    'detail' => $request->organization_detail[$i],
                ]);
            }
        }
        // End Organization

        // Talent
        $count = count($request->talent_name);
        for($i = 0; $i < $count; $i++){
            if($request->talent_name[$i] != NULL){
                Talent::create([
                    'user_id' => Auth::user()->id,
                    'scholarship_id' => $request->scholarship_id,
                    'name' => $request->talent_name[$i]
                ]);
            }
        }
        // End Talent

        return redirect()->route('downloadableForm');
    }

    public function updateEducationForm($user_id){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $educations = Education::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $achievements = Achievement::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $talents = Talent::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $organizations = Organization::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $trainings = Training::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        $languages = Language::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->get();
        return view('pendaftaran.update.formDataPendidikan')->with([
            'educations' => $educations,
            'achievements' => $achievements,
            'talents' => $talents,
            'organizations' => $organizations,
            'trainings' => $trainings,
            'languages' => $languages,
        ]);
    }

    public function updateEducationPost(Request $request, $user_id){
        // SD
        Education::find($request->elementary_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->elementary,
            'name' => $request->elementary_name,
            'province' => $request->elementary_province,
            'city' => $request->elementary_city,
            'enter' => $request->elementary_enter,
            'graduate' => $request->elementary_graduate,
        ]);
        // End SD

        // SMP
        Education::find($request->junior_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->junior,
            'name' => $request->junior_name,
            'province' => $request->junior_province,
            'city' => $request->junior_city,
            'enter' => $request->junior_enter,
            'graduate' => $request->junior_graduate,
        ]);
        // End SMP

        // SMA
        Education::find($request->high_id)->update([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'grade' => $request->high,
            'name' => $request->high_name,
            'province' => $request->high_province,
            'city' => $request->high_city,
            'enter' => $request->high_enter,
            'graduate' => $request->high_graduate,
        ]);
        // End SMA

        // Training
        $count = count($request->training_name);
        for($i = 0; $i < $count; $i++){
            if($request->training_name[$i] != NULL){
                if(isset($request->id[$i])){
                    Training::find($request->training_id[$i])->update([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->training_name[$i],
                        'period' => $request->training_period[$i],
                        'year' => $request->training_year[$i],
                        'organizer' => $request->training_organizer[$i],
                        'certificate' => $request->training_certificate[$i],
                    ]);
                }
                else{
                    Training::create([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->training_name[$i],
                        'period' => $request->training_period[$i],
                        'year' => $request->training_year[$i],
                        'organizer' => $request->training_year[$i],
                        'certificate' => $request->training_certificate[$i],
                    ]);
                }
            }
        }
        // End Training

        // Achievement
        $count = count($request->achievement_name);
        for($i = 0; $i < $count; $i++){
            if($request->achievement_name[$i] != NULL){
                if(isset($request->achievement_id[$i])){
                    Achievement::find($request->achievement_id[$i])->update([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id[$i],
                        'name' => $request->achievement_name[$i],
                        'organizer' => $request->achievement_organizer[$i],
                        'level' => $request->achievement_level[$i],
                    ]);
                }
                else{
                    Achievement::create([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id[$i],
                        'name' => $request->achievement_name[$i],
                        'organizer' => $request->achievement_organizer[$i],
                        'level' => $request->achievement_level[$i],
                    ]);
                }
            }
        }
        // End Achievement

        // Language
        $count = count($request->language);
        for($i = 0; $i < $count; $i++){
            if($request->language[$i] != NULL){
                if(isset($request->language_id[$i])){
                    Language::find($request->language_id[$i])->update([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'language' => $request->language[$i],
                        'talk' => $request->language_talk[$i],
                        'write' => $request->language_write[$i],
                        'read' => $request->language_read[$i],
                        'listen' => $request->language_listen[$i],
                    ]);
                }
                else{
                    Language::create([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'language' => $request->language[$i],
                        'talk' => $request->language_talk[$i],
                        'write' => $request->language_write[$i],
                        'read' => $request->language_read[$i],
                        'listen' => $request->language_listen[$i],
                    ]);
                }
            }
        }
        // End Language

        // Organization
        $count = count($request->organization_name);
        for($i = 0; $i < $count; $i++){
            if($request->organization_name[$i] != NULL){
                if(isset($request->organization_id[$i])){
                    Organization::find($organization_id[$i])->update([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->organization_name[$i],
                        'period' => $request->organization_period[$i],
                        'position' => $request->organization_period[$i],
                        'detail' => $request->organization_period[$i],
                    ]);
                }
                else{
                    Organization::create([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->organization_name[$i],
                        'period' => $request->organization_period[$i],
                        'position' => $request->organization_period[$i],
                        'detail' => $request->organization_period[$i],
                    ]);
                }
            }
        }
        // End Organization

        // Talent
        $count = count($request->talent_name);
        for($i = 0; $i < $count; $i++){
            if($request->talent_name[$i] != NULL){
                if(isset($request->talent_id[$i])){
                    Talent::find($request->talent_id[$i])->update([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->talent_name
                    ]);
                }
                else{
                    Talent::create([
                        'user_id' => Auth::user()->id,
                        'scholarship_id' => $request->scholarship_id,
                        'name' => $request->talent_name[$i]
                    ]);
                }
            }
        }
        // End Talent
        
        return redirect()->route('downloadableForm');
    }
    // End Education

    // Downloadable
    public function downloadableForm(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        $registered = Registered::where([['scholarship_id', '=', $scholarship->id],
                        ['user_id', '=', Auth::user()->id]])->first();
        if($registered->statusOne != "Proses Pendaftaran"){
            return redirect()->back()->with(['message' => "Anda Sudah Tidak Dapat Mengganti Data Administrasi"]);
        }
        return view('pendaftaran.formUnduhan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function downloadablePost(Request $request){
        if(Biodata::where('scholarship_id', '=', $request->scholarship_id)->where('user_id', '=', Auth::user()->id)->count() == 0){
            return redirect()->route('biodataForm')->with(['message' => "Anda Belum Mengisi Biodata Diri"]);
        }
        elseif(Family::where('scholarship_id', '=', $request->scholarship_id)->where('user_id', '=', Auth::user()->id)->count() == 0){
            return redirect()->route('familyForm')->with(['message' => "Anda Belum Mengisi Data Keluarga"]);
        }
        elseif(Education::where('scholarship_id', '=', $request->scholarship_id)->where('user_id', '=', Auth::user()->id)->count() == 0){
            return redirect()->route('educationForm')->with(['message' => "Anda Belum Mengisi Data Pendidikan"]);
        }
        else{
        $messages = [
            'required' => "File belum terupload",
            'mimes' => "Format file salah",
            'max' => "File melebihi 1 MB"
        ];

        $validator = Validator::make($request->all(),[
            'id'=>('required|mimes:jpg,jpeg,png|max:20000'),
            'graduate_pass'=>('required|mimes:pdf|max:20000'),
            'university_pass'=>('required|mimes:jpg,jpeg,png|max:20000'),
            'motivation_letter'=>('required|mimes:pdf|max:20000'),
        ], $messages);
        // dd($validator->fails());
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // ID
        $id = Auth::user()->id.'-'.'.'.$request->id->extension();
        $path_id =  $request->id->move(public_path('/document/id/'.$request->scholarship_id.'/'),$id);

        // Ijazah
        $graduate_pass = Auth::user()->id.'-'.'.'.$request->graduate_pass->extension();
        $path_graduate =  $request->graduate_pass->move(public_path('/document/graduate/'.$request->scholarship_id.'/'),$graduate_pass);

        // Diterima Univ
        $university = Auth::user()->id.'-'.'.'.$request->university_pass->extension();
        $path_university =  $request->university_pass->move(public_path('/document/university/'.$request->scholarship_id.'/'),$university);

        // Motivation Letter
        $motivation_letter = Auth::user()->id.'-'.'.'.$request->motivation_letter->extension();
        $path_motivation =  $request->motivation_letter->move(public_path('/document/motivation/'.$request->scholarship_id.'/'),$motivation_letter);

        Downloadable::create([
            'user_id' => Auth::user()->id,
            'scholarship_id' => $request->scholarship_id,
            'idPath' => '/document/id/'.$request->scholarship_id.'/'.$path_id->getFileName(),
            'motivationLetterPath' => '/document/motivation/'.$request->scholarship_id.'/'.$path_motivation->getFileName(),
            'universityPassPath' => '/document/university/'.$request->scholarship_id.'/'.$path_university->getFileName(),
            'graduatePassPath' => '/document/graduate/'.$request->scholarship_id.'/'.$path_graduate->getFileName(),
        ]);

        $registered = Registered::where('scholarship_id','=',$request->scholarship_id)->where('user_id','=',Auth::user()->id)->first();

        $registered->statusOne = "Melakukan Test";
        $registered->save();

        return redirect()->route('homeAccount');
        }

    }
    // End Downloadable

    public function onlineTest(){

        $scholarship = Scholarship::where('status','=',1)->first();
        $registered = Registered::where([['scholarship_id', '=', $scholarship->id],
                                        ['user_id', '=', Auth::user()->id]])->first();
        if($registered->statusOne != "Melakukan Test"){
            return redirect()->back()->with(['message' => "Anda Tidak Dapat Mengakses Halaman Ini"]);
        }
        return view('pendaftaran.tesOnline')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function doneOnlineTest($id){
        Registered::where([['scholarship_id', '=', $id],
                           ['user_id', '=', Auth::user()->id]])
                  ->update(['statusOne' => "Proses Seleksi"]);
        
        return redirect()->route('homeAccount')->with(['message' => 'Silahkan Menunggu Hasil Seleksi Tahap 1']);
    }

    public function onlineInterview(){
        $scholarship = Scholarship::where('status','=',1)->first();
        $registered = Registered::where('scholarship_id','=',$scholarship->id)->where('user_id','=',Auth::user()->id)->first();
        if($registered->statusTwo != "Proses Seleksi"){
            return redirect()->back()->with(['message' => "Anda Tidak Dapat Mengakses Halaman Ini"]);
        }
        return view('pendaftaran.wawancara')->with(['registered' => $registered]);
    }


}
