<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();

            $login = DB::table('user_login')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
            //dd($login);
            $post = DB::table('post_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->get();

            $post_count = DB::table('post_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->count();

            //dd($post_count);

            return view('UserViews.profile', ['user' => $user, 'login' => $login, 'post' => $post, 'post_count' =>$post_count]);
        }
        else{
            return redirect('/');
        }
    }
}
