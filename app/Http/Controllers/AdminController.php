<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Scholarship;
use App\User;
use App\Registered;
use App\Biodata;
use App\Profile;
use App\Fund;
use App\Post;
use App\PostImage;
use DB;

class AdminController extends Controller
{
    //
    public function homeAdmin(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();
        return view('admin.page.homeAdmin')->with(['scholarship' => $scholarship]);
    }

    // Scholarship
    public function scholarshipAdmin(){
        $scholarships = Scholarship::get();
        return view('admin.page.scholarshipAdmin')->with(['scholarships' => $scholarships]);
    }

    public function scholarshipAdminForm(){
        return view('admin.page.scholarshipAdminForm');
    }

    public function scholarshipAdminPost(Request $request){
        // dd($request->all());
        if(strpos($request->onlineTest,'https://') !== false){
            $link = $request->onlineTest;
        }
        else{
            $link = "https://".$request->onlineTest;
        }

        Scholarship::create([
            'name' => $request->name,
            'startStepOne' => $request->startStepOne,
            'endStepOne' => $request->endStepOne,
            'announceStepOne' => $request->announceStepOne,
            'startStepTwo' => $request->startStepTwo,
            'endStepTwo' => $request->endStepTwo,
            'announceStepTwo' => $request->announceStepTwo,
            'onlineTest' => $link,
            'status' => 0,
        ]);
        return redirect()->route('scholarshipAdmin')->with(['message' => 'Beasiswa Berhasil Ditambahkan']);
    }

    public function scholarshipAdminActivate($id){
        Scholarship::where('status','=',1)->update(['status' => 0]);
        Scholarship::find($id)->update(['status' => 1]);

        return redirect()->route('scholarshipAdmin');
    }

    public function scholarshipAdminDeactivate($id){
        Scholarship::find($id)->update(['status' => 0]);

        return redirect()->route('scholarshipAdmin');
    }

    public function scholarshipAdminUpdateForm($id){
        $scholarship = Scholarship::find($id);

        return view('admin.page.update.scholarshipAdminForm')->with(['scholarship' => $scholarship]);
    }

    public function scholarshipAdminUpdatePost(Request $request, $id){
        // dd($request->all());

        if(strpos($request->onlineTest,'https://') !== false){
            $link = $request->onlineTest;
        }
        else{
            $link = "https://".$request->onlineTest;
        }

        Scholarship::find($id)->update([
            'name' => $request->name,
            'startStepOne' => $request->startStepOne,
            'endStepOne' => $request->endStepOne,
            'announceStepOne' => $request->announceStepOne,
            'startStepTwo' => $request->startStepTwo,
            'endStepTwo' => $request->endStepTwo,
            'announceStepTwo' => $request->announceStepTwo,
            'onlineTest' => $link,
            'status' => 0,
        ]);
        return redirect()->route('scholarshipAdmin')->with(['message' => 'Beasiswa Berhasil Ditambahkan']);

    }

    public function scholarshipAdminDelete($id){
        Scholarship::find($id)->delete();

        return redirect()->route('scholarshipAdmin')->with(['message' => 'Beasiswa Berhasil Ditambahkan']);
    }
    // Scholarship End

    // Selection
    public function registeredAdmin(){
        $scholarship = Scholarship::where('status' , '=' , 1)->first();

        // Tahap 1
        $stepOne = DB::table('registereds')->where([['scholarship_id','=',$scholarship->id]
                                                    ,['statusOne','=',"Proses Seleksi"]])
                    ->join('users','registereds.user_id','=','users.id')
                    ->select('registereds.*','users.*','registereds.id')->get();
        // End Tahap 1

        // Tahap 2
        $stepTwo = DB::table('registereds')->where([['scholarship_id','=',$scholarship->id]
                                                    ,['statusTwo','=',"Proses Seleksi"]])
                    ->join('users','registereds.user_id','=','users.id')
                    ->select('registereds.*','users.*','registereds.id')->get();
        // End Tahap 2

        // Ditolak
        $denied = DB::table('registereds')->where([['scholarship_id','=',$scholarship->id]
                                                    ,['statusOne','=',"Tidak Lolos"]])
                                            ->orWhere([['scholarship_id','=',$scholarship->id]
                                                    ,['statusTwo','=',"Tidak Lolos"]])
                    ->join('users','registereds.user_id','=','users.id')
                    ->select('registereds.*','users.*','registereds.id')->get();
        // End Ditolak

        return view('admin.page.registeredAdmin')->with(['stepOne' => $stepOne,
                                                         'stepTwo' => $stepTwo,
                                                         'denied' => $denied]);
    }

    public function stepOneAdminForm($id){
        $user = DB::table('registereds')->find($id);
        // dd($user);
        return view('admin.page.stepOneForm')->with(['user' => $user]);
    }

    public function stepOneAdminAccept(Request $request,$id){
        if(strpos($request->onlineTest,'https://') !== false){
            $link = $request->onlineInterview;
        }
        else{
            $link = "https://".$request->onlineInterview;
        }

        Registered::find($id)->update([
            'onlineInterview' => $link,
            'interviewDate' => $request->interviewDate,
            'interviewTime' => $request->interviewTime,
            'statusOne' => "Lolos",
            'statusTwo' => "Proses Seleksi",
        ]);

        return redirect()->route('registeredAdmin');
    }

    public function stepOneAdminDeny($id){
        Registered::find($id)->update([
            'statusOne' => "Tidak Lolos"
        ]);

        return redirect()->route('registeredAdmin');
    }

    public function stepTwoAdminAccept($id){
        Registered::find($id)->update([
            'statusTwo' => "Lolos",
        ]);

        $user = Registered::find($id);

        User::find($user->user_id)->update([
            'role' => 2
        ]);

        $biodata = Biodata::where([['user_id', '=', $user->user_id],
                                   ['scholarship_id', '=', $user->scholarship_id]])->first();

        Profile::create([
            'user_id' => $user->user_id,
            'scholarship_id' => $user->scholarship_id,
            'name' => $biodata->name,
            'email' => $biodata->email,
            'nik' => $biodata->idNumber,
            'birthplace' => $biodata->birthplace,
            'birthdate' => $biodata->birthdate,
            'address' => $biodata->addressLiving,
            'postalCode' => $biodata->postCodeLiving,
            'district' => $biodata->districtLiving,
            'city' => $biodata->cityLiving,
            'province' => $biodata->provinceLiving,
            'phoneNumber' => $biodata->telephone,
            'university' => $biodata->university,
            'major' => $biodata->major,
        ]);

        return redirect()->route('registeredAdmin');
    }

    public function stepTwoAdminDeny($id){
        Registered::find($id)->update([
            'statusTwo' => "Tidak Lolos"
        ]);

        return redirect()->route('registeredAdmin');
    }
    // Selection End

    // Pencairan Dana
    public function fundingAdmin(){
        $fundings = DB::table('funds')
                    ->join('users','funds.user_id','=','users.id')
                    ->join('scholarships','funds.scholarship_id','=','scholarships.id')
                    ->select('funds.*','users.name as userName','scholarships.name as scholarshipName')->get();
        // dd($fundings);
        return view('admin.page.fundingAdmin')->with(['fundings' => $fundings]);
    }

    public function fundingOneForm(){
        $users = Profile::get();
        return view('admin.page.fundingOneForm')->with(['users' => $users]);
    }

    public function fundingOnePost(Request $request){
        // dd($request->all());
        $user = Profile::find($request->user_id);
        Fund::create([
            'user_id' => $user->user_id,
            'scholarship_id' => $user->scholarship_id,
            'date' => $request->date,
            'detail' => $request->detail,
            'total' => $request->total,
            'status' => $request->status,
        ]);
        return redirect()->route('fundingAdmin');
    }

    public function fundingBulkForm(){
        $scholarships = Scholarship::get();
        return view('admin.page.fundingBulkForm')->with(['scholarships' => $scholarships]);
    }

    public function fundingBulkPost(Request $request){
        $users = Profile::where('scholarship_id', '=', $request->scholarship_id)->get();
        foreach($users as $user){
            Fund::create([
                'user_id' => $user->user_id,
                'scholarship_id' => $request->scholarship_id,
                'date' => $request->date,
                'detail' => $request->detail,
                'total' => $request->total,
                'status' => $request->status,
            ]);
        }
        return redirect()->route('fundingAdmin');
    }
    // End Pencairan Dana

    // Post
    public function postAdmin(){
        $posts = Post::get();
        return view('admin.page.postAdmin')->with(['posts' => $posts]);
    }

    public function postAdminForm(){
        return view('admin.page.postForm');
    }

    public function postAdminPost(Request $request){
        // dd($request->all());

        $post = Post::create([
            "title" => $request->title,
            "content" => $request->content,
            "date" => date('Y-m-d'),
        ]);

        foreach($request->images as $image){
            $name = $image->getClientOriginalName();
            $path =  $image->move(public_path('/Post/Image/'),$name);

            PostImage::create([
                'post_id' => $post->id,
                'imagePath' => '/Post/Image/'.$name,
            ]);
        }

        return redirect()->route('postAdmin');
    }

    public function postEditAdminForm(){

    }

    public function postEditAdminPost(){

    }

    public function postDeleteAdminPost(){

    }
    // End Post
}
