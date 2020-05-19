<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class UserProfileController extends Controller
{
    public function Index($id,Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_details.user_id', $id)
                        ->first();
			$loginData = DB::table('user_login')
						->where('user_login.user_id', $id)
						->first();
			$postData = DB::table('post_details')
						->where('user_id', $id)
						->get();
						
            return view('AccountManagerViews.user', ['user' => $user,'loginData' => $loginData,'postData' => $postData]);
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function Activate($id,Request $request){
		
		if($request->session()->has('user_id') && $request->session()->has('acmStatus')){
			$status = DB::table('user_details')
					->where('user_id', $id)
					->update(['account_status' => 'Activated']);

			if(!$status){
				
			}else{
				return redirect()->route('UserProfile.Index',$id);
			}
		}
		else{
			return redirect('/logout');
		}
    }
	
	public function Deactivate($id,Request $request){
		if($request->session()->has('user_id') && $request->session()->has('acmStatus')){
			$status = DB::table('user_details')
					->where('user_id', $id)
					->update(['account_status' => 'Deactivated']);

			if(!$status){
				
			}else{
				return redirect()->route('UserProfile.Index',$id);
			}
		}
		else{
			return redirect('/logout');
		}
    }
	
	
	
	// public function Update(Request $request){
		
        // $Validation = Validator::make($request->all(), [
			// 'fname'		=>'required',
			// 'lname'		=>'required'
		// ]);

		// if($Validation->fails()){
			// return back()
					// ->with('errors', $Validation->errors())
					// ->withInput();
		// }
		
		
		// $status = DB::table('user_details')
				// ->where('user_id', $request->session()->get('user_id'))
				// ->update([  'first_name'    => $request->fname,
							// 'last_name'		=> $request->lname,
							// 'phone'			=> $request->phone,
							// 'gender'		=> $request->gender,
							// 'bio' 		    => $request->bio,
							// 'address' 	    => $request->address,
							// 'Website' 		=> $request->website]);

		// if(!$status){
			
		// }else{
			// return redirect()->route('AcmProfile.Index');
		// }
    // }
}
