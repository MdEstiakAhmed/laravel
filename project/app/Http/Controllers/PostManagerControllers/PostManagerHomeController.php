<?php

namespace App\Http\Controllers\PostManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostManagerHomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();

            return view('postManagerViews.homeContent', ['user' => $user]);
        }
        else{
            return redirect('/');
        }
    }

    public function allPost(Request $request){
        $allPost = DB::table('post_details')
                     ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                     ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image')
                     ->where('post_status', 'Approved')
                     ->orderBy('post_details.post_id', 'ASC')
                     ->get();
        
        return view('postManagerViews.allPost', ['posts' => $allPost]);
    }

    public function pendingPost(Request $request){
        $pendingPost = DB::table('post_details')
                         ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                         ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_status', 'post_details.post_image')
                         ->where('post_status', 'pending')
                         ->orderBy('post_details.post_id', 'ASC')
                         ->get();

        return view('postManagerViews.pendingPost', ['pendingPosts' => $pendingPost]);
    }
}
