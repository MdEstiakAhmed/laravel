<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class AcmProfileController extends Controller
{
    public function Index(Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->join('user_login','user_details.user_id','=','user_login.user_id')
                        ->where('user_details.user_id', $request->session()->get('user_id'))
                        ->first();
						
			return view('AccountManagerViews.profile', ['user' => $user]);
        }
        else{
            return redirect('/logout');
        }
    }
}
