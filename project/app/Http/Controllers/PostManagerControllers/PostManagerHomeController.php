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
                        ->join('user_login', 'user_login.user_id', 'user_details.user_id')
                        ->where('user_details.user_id', $request->session()->get('user_id'))
                        ->first();

            return view('postManagerViews.homeContent', ['user' => $user]);
        }
        else{
            return redirect('/');
        }
    }

    public function all(Request $request){
        $allPost = DB::table('post_details')
                     ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                     ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image', 'post_details.post_status', 'post_details.user_id')
                     ->orderBy('post_details.post_id', 'ASC')
                     ->get();
        
        return view('postManagerViews.allPost', ['posts' => $allPost]);
    }

    public function allPost(Request $request){
        $allPost = DB::table('post_details')
                     ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                     ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_image', 'post_details.post_status', 'post_details.user_id')
                     ->where('post_status', 'Approved')
                     ->orderBy('post_details.post_id', 'ASC')
                     ->get();
        
        return view('postManagerViews.allPost', ['posts' => $allPost]);
    }

    public function pendingPost(Request $request){
        $pendingPost = DB::table('post_details')
                         ->join('user_details', 'user_details.user_id', 'post_details.user_id')
                         ->select('user_details.first_name', 'user_details.last_name', 'post_details.post_text', 'post_details.post_id', 'post_details.post_type', 'post_details.post_time', 'post_details.post_status', 'post_details.post_image', 'post_details.user_id')
                         ->where('post_status', 'Pending')
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

    public function report(Request $request){
        $date=date_create("2020-05-16 05:08");
        // return date_format($date,"Y-m-d");


        $total_post = DB::table('post_details')
                        ->count();
        $approved_post = DB::table('post_details')
                        ->where('post_status', 'Approved')
                        ->count();
        $pending_post = DB::table('post_details')
                        ->where('post_status', 'Pending')
                        ->count();
        $today_total_post = DB::table('post_details')
                        ->where('post_time', 'like', '%' . date("Y-m-d") . '%')
                        ->count();
        $today_approved_post = DB::table('post_details')
                        ->where([['post_status', 'Approved'], ['post_time', 'like', '%' . date("Y-m-d") . '%']])
                        ->count();
        $today_pending_post = DB::table('post_details')
                        ->where([['post_status', 'Pending'], ['post_time', 'like', '%' . date("Y-m-d") . '%']])
                        ->count();
        return view('postManagerViews.report', ['totalPost' => $total_post, 'approvedPost' => $approved_post, 'pendingPost' => $pending_post, 'todayTotalPost' => $today_total_post, 'todayApprovedPost' => $today_approved_post, 'todayPendingPost' => $today_pending_post]);
    }

    public function search(){
        return view('postManagerViews.search');
    }
}
