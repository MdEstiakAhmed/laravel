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

    public function profileEdit($user_id, Request $request){
        $userInfo = DB::table('user_details')
                        ->join('user_login', 'user_login.user_id', 'user_details.user_id')
                        ->where('user_details.user_id', $user_id)
                        ->first();

        return view('postManagerViews.profileEdit', ['userInfo' => $userInfo]);;
    }

    public function profileUpdate($user_id, Request $request){
        $validation = $request->validate([
            'first_name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'last_name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'email'=>'required|email',
            'phone'=>'max:11|regex:/^[01]/i',
            'bio'=>'',
            'website'=>'',
            'address'=>'',
            'password'=>'required',
            're_password'=>'required|same:password'
        ]);

        if($validation != null){
            DB::table('user_details')
                ->where('user_id', $user_id)
                ->update(['first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone'=>$request->phone, 'bio'=>$request->bio, 'website'=>$request->website, 'address'=>$request->address]);

            DB::table('user_login')
                ->where('user_id', $user_id)
                ->update(['email' => $request->email, 'password' => $request->password]);
            
            $updateMessage = "user id: ".$user_id." successfully updated";
            $request->session()->put('notification', $updateMessage);
            return redirect()->route('profileView.userInfo', $user_id);
        }
    }
}
