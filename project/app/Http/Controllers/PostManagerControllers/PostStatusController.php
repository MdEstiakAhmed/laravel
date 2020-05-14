<?php

namespace App\Http\Controllers\PostManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostStatusController extends Controller
{
    public function postApprove($post_id, Request $request){
        DB::table('post_details')
                ->where('post_id', $post_id)
                ->update(['post_status' => 'Approved']);

        $request->session()->put('post_approve', $post_id);
        return redirect()->route('postManagerHome.pendingPost');
    }
}
