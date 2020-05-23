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
						
			$blockStatus= DB::table('account_block_request')
							->where('user_id', $request->session()->get('user_id'))
							->first();
			
			if($blockStatus!=Null)
			{
				$status = json_encode($blockStatus->block_status);
				if($status == json_encode("Blocked")){
					$request->session()->put('msg', 'Your account has been blocked!');
					
					return redirect('/');
				}
				else
				{
					$user_type = json_encode($user->user_type);
					if($user_type == json_encode("post.manager")){
						return redirect()->route('postManagerHome.index');
					}
					else if($user_type == json_encode("account.manager")){
						$request->session()->put('acmStatus', 1);
						return redirect()->route('AcmHome.Index');
					}
					else if($user_type == json_encode("user")){
						return redirect()->route('userHome.index');
					}
					else{
						return redirect('/');
					}
				}
			}
			else
			{
				$user_type = json_encode($user->user_type);
				if($user_type == json_encode("post.manager")){
					return redirect()->route('postManagerHome.index');
				}
				else if($user_type == json_encode("account.manager")){
					$request->session()->put('acmStatus', 1);
					return redirect()->route('AcmHome.Index');
				}
				else if($user_type == json_encode("user")){
					return redirect()->route('userHome.index');
				}
				else{
					return redirect('/');
				}
			}
        }
        else{
            return redirect('/');
        }
    }
}
