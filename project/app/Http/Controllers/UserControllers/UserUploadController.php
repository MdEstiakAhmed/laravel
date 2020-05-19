<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post_details;
use Validator;

class UserUploadController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('user_id')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();

            $login = DB::table('user_login')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
            //dd($login);

            return view('UserViews.upload', ['user' => $user, 'login' => $login]);
        }
        else{
            return redirect('/');
        }
    }

    public function post(Request $request){

        //dd($request->privacy);

        //*******************Validation********************//
        $validation = Validator::make($request->all(), [
            'image'       => 'required_without_all:postText',
            'postText'    => 'required_without_all:image',
        ]);


        if($validation->fails()){
            return back();
        }

        //*********************Insert*******************//

        $user_id = $request->session()->get('user_id');
        $privacy = $request->privacy;

        if ($privacy!=null) { //Privacy Check

            if ($request->hasFile('image')){ //Image check

                $image = $request->image->store('images','public');
                //dd(asset($image));
                $status = DB::table('post_details')->insert([

                    'user_id'       => $user_id,
                    'post_text'     => $request->postText,
                    'post_image'    => $image,
                    'post_type'     => "Private",
                    'post_status'   => "Approved",
                    'post_time'     => Date('yy-m-d h:i')
                ]);

                if($status){
                    return redirect()->route('home.index');
                }else{
                    return redirect()->route('upload.index');
                }
            }
            else{

                $status = DB::table('post_details')->insert([

                    'user_id'       => $user_id,
                    'post_text'     => $request->postText,
                    'post_image'    => null,
                    'post_type'     => "Private",
                    'post_status'   => "Approved",
                    'post_time'     => Date('yy-m-d h:i')
                ]);

                if($status){
                    return redirect()->route('home.index');
                }else{
                    return redirect()->route('upload.index');
                }
            }
        }

        else{

            if ($request->hasFile('image')){

                $image = $request->image->store('images','public');
                //dd(asset($image));
                $status = DB::table('post_details')->insert([

                    'user_id'       => $user_id,
                    'post_text'     => $request->postText,
                    'post_image'    => $image,
                    'post_type'     => "Public",
                    'post_status'   => "Approved",
                    'post_time'     => Date('yy-m-d h:i')
                ]);

                if($status){
                    return redirect()->route('home.index');
                }else{
                    return redirect()->route('upload.index');
                }
            }
            else{

                $status = DB::table('post_details')->insert([

                    'user_id'       => $user_id,
                    'post_text'     => $request->postText,
                    'post_image'    => null,
                    'post_type'     => "Public",
                    'post_status'   => "Approved",
                    'post_time'     => Date('yy-m-d h:i')
                ]);

                if($status){
                    return redirect()->route('home.index');
                }else{
                    return redirect()->route('upload.index');
                }
            }

        }

            
    }
}