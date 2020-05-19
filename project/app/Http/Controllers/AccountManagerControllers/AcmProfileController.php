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
	
	public function Timeline(Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->join('user_login','user_details.user_id','=','user_login.user_id')
                        ->where('user_details.user_id', $request->session()->get('user_id'))
                        ->first();
			$loginData = DB::table('user_login')
							->where('user_login.user_id', $request->session()->get('user_id'))
							->first();
			$postData = DB::table('post_details')
							->where('user_id', $request->session()->get('user_id'))
							->orderBy('post_id','desc')
							->get();
						
            return view('AccountManagerViews.profile', ['user' => $user,'loginData' => $loginData,'postData' => $postData]);
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function Statuspost(Request $request){
		
		if($request->session()->has('user_id') && $request->session()->has('acmStatus')){
			
			$Validation = Validator::make($request->all(), [
				'postText'=>'required'
			]);

			if($Validation->fails()){
				return back()
						->with('errors', $Validation->errors())
						->withInput();
			}
			
			$imageLink = Null;
			
			$status = DB::table('post_details')
					->insert([  'post_id'     => Null,
								'user_id'	  => $request->session()->get('user_id'),
								'post_text'	  => $request->postText,
								'post_image'  => $imageLink,
								'post_type'   => $request->postType,
								'post_status' => 'Approved',
								'post_time'   => Date('yy-m-d h:i')
								]);
								
			if($request->hasFile('postImage'))
			{
				$pid = DB::table('post_details')->orderBy('post_id','desc')->value('post_id');
				$file = $request->file('postImage');
				$file->move('images',$pid.'.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('post_details')
								->where('post_id', $pid)
								->update(['post_image'=>$imageLink]);
			}

			if(!$status){
				return redirect()->route('AcmProfile.Index');
			}else{
				return redirect()->route('AcmProfile.Timeline');
			}
		}
		else
		{
			return redirect('/logout');
		}
    }
	
	public function Update(Request $request){
		
		if($request->session()->has('user_id') && $request->session()->has('acmStatus')){
			$Validation = Validator::make($request->all(), [
				'fname'		=>'required',
				'lname'		=>'required',
				'email'		=>'required',
				'pass1'		=>'required',
				'pass2'		=>'required|same:pass1'
			]);

			if($Validation->fails()){
				return back()
						->with('errors', $Validation->errors())
						->withInput();
			}
			
			
			$status = DB::table('user_details')
					->where('user_id', $request->session()->get('user_id'))
					->update([  'first_name'    => $request->fname,
								'last_name'		=> $request->lname,
								'phone'			=> $request->phone,
								'bio' 		    => $request->bio,
								'birthdate'	    => $request->birthdate,
								'address' 	    => $request->address,
								'Website' 		=> $request->website]);
								
			$status2 = DB::table('user_login')
					->where('user_id', $request->session()->get('user_id'))
					->update([  'email'    => $request->email,
								'password' => $request->pass1]);

			if(!$status){
				
			}else{
				return redirect()->route('AcmProfile.Index');
			}
		}
		else
		{
			return redirect('/logout');
		}
    }
}
