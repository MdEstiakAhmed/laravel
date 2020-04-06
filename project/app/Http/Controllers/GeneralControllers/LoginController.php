<?php

namespace App\Http\Controllers\GeneralControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('generalViews.login');
    }

    public function verify(Request $request){
        $user = DB::table('user_login')
                    ->where('email', $request->identity)
                    ->orWhere('username', $request->identity)
                    ->where('password', $request->password)
                    ->first();

        if($user != null){
            $userData = json_encode($user->user_id);
            $request->session()->put('user_id', $userData);
            return redirect()->route('home.index');
        }
        else{
            return redirect('/');
        }
        
    }
}
