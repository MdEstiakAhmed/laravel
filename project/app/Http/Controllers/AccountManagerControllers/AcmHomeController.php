<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class AcmHomeController extends Controller
{
    public function Index(Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$data = DB::table('user_details')
						->leftJoin('account_warning','user_details.user_id','=','account_warning.user_id')
						->rightJoin('account_block_request','user_details.user_id','=','account_block_request.user_id')
						->get();
			$msgData = DB::table('message_details')
						->leftJoin('user_details','user_details.user_id','=','message_details.user_id')
						->orderBy('message_details.message_time','asc')
						->get();
			
			$postCount = DB::table('post_details')->value(DB::raw('count(*)'));
			$acccCount = DB::table('user_details')->value(DB::raw('count(*)'));
			$blckCount = DB::table('account_block_request')->where('block_status','Blocked')->value(DB::raw('count(*)'));
			$accsCount = DB::table('user_details')->where('account_status','Deactivated')->value(DB::raw('count(*)'));
			
			return view('AccountManagerViews.home', ['user' => $user,'data' => $data,'msgData' => $msgData,'postCount' => $postCount,'acccCount' => $acccCount,'accsCount' => $accsCount,'blckCount' => $blckCount]);
        }
        else{
            return redirect('/logout');
        }
    }
	
}
