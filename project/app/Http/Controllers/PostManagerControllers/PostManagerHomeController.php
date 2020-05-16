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

    public function UserList(Request $request){
        $allUser = DB::table('user_details')
                     ->join('user_login', 'user_login.user_id', 'user_details.user_id')
                     ->select('user_details.user_id', 'user_details.first_name', "user_details.last_name", 'user_login.email', 'user_login.username')
                     ->orderBy('user_details.user_id', 'ASC')
                     ->get();

        return view('postManagerViews.userList', ['allUser' => $allUser]);
    }

    public function profileView($user_id, Request $request){
        $userInfo = DB::table('user_details')
                        ->join('user_login', 'user_login.user_id', 'user_details.user_id')
                        ->where('user_details.user_id', $user_id)
                        ->first();

        $userPost = DB::table('post_details')
                        ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                        ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image')
                        ->where('post_details.user_id', $user_id)
                        ->orderBy('post_details.post_id', 'ASC')
                        ->get();

        return view('postManagerViews.profileView', ['userInfo' => $userInfo, 'userPost' => $userPost]);
        // return $userPost;
    }

    public function createPost(Request $request){
        return view('postManagerViews.createPost');
    }

    public function publishPost(Request $request){
        DB::table('post_details')
            ->insert(['user_id' => session('user_id'), 'post_text' => $request->post_text, 'post_image'=> null, 'post_type'=> 'public', 'post_status'=> 'Approved', 'post_time'=> date("Y-m-d H:i")]
        );

        $postPublishMessage = "new post created by: ".session('user_id');
        $request->session()->put('notification', $postPublishMessage);
        return redirect()->route('postManagerHome.index');
    }

    public function notification($user_id, Request $request){
        return view('postManagerViews.notificationSend', ['user_id'=>$user_id]);
    }

    public function notificationSend(Request $request){
        DB::table('message_details')
            ->insert(['user_id'=> $request->user_id, 'sender_id' => session('user_id'), 'message_text' => $request->post_text, 'message_time'=> date("Y-m-d H:i")]
        );

        $postPublishMessage = "notification send to ".$request->user_id;
        $request->session()->put('notification', $postPublishMessage);
        return redirect()->route('postManagerHome.UserList');
    }
}
