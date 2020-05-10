<?php

namespace App\Http\Controllers\GeneralControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request){
		if($request->session()->has('user_id')){
			return redirect('/home');
		}else{
			return view('generalViews.login');
		}
    }

    public function verify(Request $request){
        $user = DB::table('user_login')
                    ->where('email', $request->identity)
                    ->orWhere('username', $request->identity)
                    ->where('password', $request->password)
                    ->first();

        if($user != null){
            $userData = json_encode($user->user_id);
            $userMail = json_encode($user->email);
            $request->session()->put('user_id', $userData);
            $request->session()->put('mail', $userMail);
            return redirect()->route('home.index');
        }
        else{
			$request->session()->put('msg', 'Invalid Username/Password');
            return redirect('/');
        }
        
    }
}
