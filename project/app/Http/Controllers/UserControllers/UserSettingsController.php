<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserSettingsController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();

            $login = DB::table('user_login')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
            //dd($user->image);

            return view('UserViews.settings', ['user' => $user, 'login' => $login]);
        }
        else{
            return redirect('/');
        }
    }

    public function update(Request $request){

    	$user_id = $request->session()->get('user_id');

    	 if ($request->hasFile('image')){

            $image = $request->image->store('public/images');

            $status = DB::table('user_details')->where('user_id',$user_id)->update([

				'first_name'	=> $request->firstname,
				'last_name'		=> $request->lastname,
				'phone'			=> $request->phone,
				'gender'		=> $request->gender,
				'birthdate'		=> $request->birthdate,
				'bio'			=> $request->bio,
				'website'		=> $request->website,
				'address'		=> $request->address,
				'image'			=> $image,
            ]);

            if($status){
                return redirect()->route('home.index');
            }else{
                return redirect()->route('upload.index');
            }
        }
        else{

            $status = DB::table('user_details')->where('user_id',$user_id)->update([

				'first_name'	=> $request->firstname,
				'last_name'		=> $request->lastname,
				'phone'			=> $request->phone,
				'gender'		=> $request->gender,
				'birthdate'		=> $request->birthdate,
				'bio'			=> $request->bio,
				'website'		=> $request->website,
				'address'		=> $request->address,
				'image'			=> null,
            ]);

            if($status){
                return redirect()->route('home.index');
            }else{
                return redirect()->route('upload.index');
            }
        }
	}
}
