<?php

namespace App\Http\Controllers\GeneralControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class RegisterController extends Controller
{
    public function Index(){
        return view('generalViews.register');
    }

    public function Register(Request $request){
        
		$Validation = Validator::make($request->all(), [
			'fname'    => 'required|regex:/^[a-zA-Z\s]+$/',
			'lname'    => 'required|regex:/^[a-zA-Z\s]+$/',
			'username' => 'required|unique:user_login',
			'email'    => 'required|email|unique:user_login',
			'pass1'	   => 'required|min:5',
			'pass2'	   => 'required|same:pass1'
		]);

		if($Validation->fails()){
			return back()
				->with('errors', $Validation->errors())
				->withInput();
		}
		
		$status1= DB::table('user_login')->insert([
				'user_id'	=> null,
				'username'	=> $request->username,
				'email'  	=> $request->email,
				'password'  => $request->pass1
				]);
				
		$id = DB::table('user_login')->where('username',$request->username)->value('user_id');
							
		$status2= DB::table('user_details')->insert([
				'user_id'		=> $id,
				'first_name'	=> $request->fname,
				'last_name'		=> $request->lname,
				'phone'			=> $request->phone,
				'gender'		=> $request->gender,
				'birthdate'		=> $request->birthdate,
				'bio'			=> $request->bio,
				'website'		=> $request->website,
				'address'		=> $request->address,
				'image'			=> null,
				'user_type'		=> $request->type,
				'account_status'=> 'Activated',
			]);

		$status3 = DB::table('account_warning')->insert([
			'user_id' => $id,
			'warning_count' => 0,
		]);

		$status4 = DB::table('account_block_request')->insert([
			'user_id' => $id,
			'block_status' => 'Unblock',
		]);

		if(!$status1){
			return redirect()->route('Register.Index',$id);
		}else{
			if(!$status2){
				return redirect()->route('Register.Index',$id);
			}else{
				if(!$status3){
					return redirect()->route('Register.Index',$id);
				}
				else{
					return redirect('/');
				}
			}
		}
    }
}
