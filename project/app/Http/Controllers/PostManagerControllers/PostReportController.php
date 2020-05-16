<?php

namespace App\Http\Controllers\PostManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostReportController extends Controller
{
    public function all(Request $request){
        $allPost = DB::table('post_details')
                     ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                     ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image', 'post_details.post_status')
                     ->where('post_time', 'like', '%' . date("Y-m-d") . '%')
                     ->orderBy('post_details.post_id', 'ASC')
                     ->get();
        
        return view('postManagerViews.allPost', ['posts' => $allPost]);
    }

    public function allPost(Request $request){
        $allPost = DB::table('post_details')
                     ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                     ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image', 'post_details.post_status')
                     ->where('post_status', 'Approved')
                     ->where('post_time', 'like', '%' . date("Y-m-d") . '%')
                     ->orderBy('post_details.post_id', 'ASC')
                     ->get();
        
        return view('postManagerViews.allPost', ['posts' => $allPost]);
    }

    public function pendingPost(Request $request){
        $pendingPost = DB::table('post_details')
                         ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                         ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_status', 'post_details.post_image')
                         ->where('post_status', 'Pending')
                         ->where('post_time', 'like', '%' . date("Y-m-d") . '%')
                         ->orderBy('post_details.post_id', 'ASC')
                         ->get();

        return view('postManagerViews.pendingPost', ['pendingPosts' => $pendingPost]);
    }
}
