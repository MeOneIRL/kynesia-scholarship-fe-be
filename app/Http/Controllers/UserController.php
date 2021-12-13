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
        if(Education::where('user_id' , '=' , Auth::user()->id)->where('scholarship_id','=',$scholarship->id)->first() != NULL){
            return redirect()->route('updateEducationForm',Auth::user()->id);
        }
        return view('pendaftaran.formDataPendidikan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function educationPost(Request $request){
        // dd($request->all());

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
                    'organizer' => $request->training_year[$i],
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
                    'position' => $request->organization_period[$i],
                    'detail' => $request->organization_period[$i],
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
                    'name' => $request->talent_name
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
        // dd($request->language_id[2]);
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
                        'organizer' => $request->training_year[$i],
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
                        'name' => $request->talent_name
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
        return view('pendaftaran.formUnduhan')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function downloadablePost(Request $request){
        // dd($request->all());

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
    // End Downloadable

    public function onlineTest(){
        $scholarship = Scholarship::where('status','=',1)->first();
        return view('pendaftaran.tesOnline')->with([
            'scholarship' => $scholarship
        ]);
    }

    public function onlineInterview(){
        $scholarship = Scholarship::where('status','=',1)->first();
        $registered = Registered::where('scholarship_id','=',$scholarship->id)->where('user_id','=',Auth::user()->id)->first();
        return view('pendaftaran.wawancara');
    }


}
