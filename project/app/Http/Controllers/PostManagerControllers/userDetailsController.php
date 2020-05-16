<?php

namespace App\Http\Controllers\PostManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class userDetailsController extends Controller
{
    public function userInfo($user_id, Request $request){
        $userInfo = DB::table('user_details')
                        ->join('user_login', 'user_login.user_id', 'user_details.user_id')
                        ->where('user_details.user_id', $user_id)
                        ->first();

        return view('postManagerViews.userInfo', ['userInfo' => $userInfo]);;

    }
}
