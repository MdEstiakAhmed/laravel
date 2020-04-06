<?php

namespace App\Http\Controllers\GeneralControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GeneralHomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){
            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
    
            $user_type = json_encode($user->user_type);
            if($user_type == json_encode("post.manager")){
                return redirect()->route('postManagerHome.index');
            }
            else if($user_type == json_encode("account.manager")){
                return "set your route for account manager home";
            }
            else if($user_type == json_encode("user")){
                return "set your route for user home";
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }
}
