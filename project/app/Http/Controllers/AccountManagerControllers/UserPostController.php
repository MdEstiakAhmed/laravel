<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserPostController extends Controller
{
    public function Index($mon, Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$loginData = DB::table('user_login')
							->get();
							
			$postData = DB::table('post_details')
							->leftJoin('user_details','user_details.user_id','=','post_details.user_id')
							->where('post_details.post_time','like','2020-'.$mon.'%')
							->orderBy('post_time','desc')
							->get();
			
			return view('AccountManagerViews.posts', ['user' => $user,'loginData' => $loginData,'postData' => $postData]);
        }
        else{
            return redirect('/logout');
        }
    }
}
