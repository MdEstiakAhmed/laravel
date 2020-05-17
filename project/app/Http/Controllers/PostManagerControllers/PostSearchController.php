<?php

namespace App\Http\Controllers\PostManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostSearchController extends Controller
{
    public function ajaxSearch(Request $request){
        $data = $request->value;

        if($data != ""){
            $userInfo = DB::table('user_details')
                        ->join('post_details', 'post_details.user_id', 'user_details.user_id')
                        ->where('user_details.first_name','like','%'.$data.'%')
                        ->orWhere('user_details.last_name','like','%'.$data.'%')
                        ->orderBy('post_details.post_id', 'ASC')
                        ->get();
        }
        else{
            $userInfo = DB::table('user_details')
                        ->join('post_details', 'post_details.user_id', 'user_details.user_id')
                        ->orderBy('post_details.post_id', 'ASC')
                        ->get();
        }

        

        return response()->json(['data'=> $userInfo], 200);
    }
}
