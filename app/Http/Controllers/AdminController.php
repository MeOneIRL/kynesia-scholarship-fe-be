<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Scholarship;

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

    public function registeredAdmin(){
        return view('admin.page.registeredAdmin');
    }

    public function fundingAdmin(){
        return view('admin.page.fundingAdmin');
    }

    public function postAdmin(){
        return view('admin.page.postAdmin');
    }
}
