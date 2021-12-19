<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Fund;
use App\Post;
use App\PostImage;
use DB;

class PortalController extends Controller
{
    //
    public function loginPortal(){
        return view('portal.masukPortal');
    }

    public function homePortal(){
        $posts = DB::table('posts')
                    ->join('post_images','posts.id','=','post_images.post_id')
                    ->select('posts.*', 'post_images.imagePath', 'posts.id as id')
                    ->get();
        $posts = $posts->groupBy('id');
        // dd($posts);
        return view('portal.homePortal')->with(['posts' => $posts]);
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

    // Post
    public function detailPost($id){
        $post = Post::find($id);
        $images = PostImage::where('post_id','=',$id)->get();
        // dd($images);
        return view('portal.postPortal')->with(['post' => $post, 'images' => $images]);
    }
    // End Post
}
