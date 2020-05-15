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

        $approvedMessage = "post id: ".$post_id." successfully approved";
        $request->session()->put('post_status_change', $post_id);
        return redirect()->route('postManagerHome.pendingPost');
    }

    public function posDelete($post_id, Request $request){
        DB::table('post_details')
            ->where('post_id', '=', $post_id)
            ->delete();

        $deleteMessage = "post id: ".$post_id." successfully deleted";
        $request->session()->put('post_status_change', $deleteMessage);
        return redirect()->route('postManagerHome.pendingPost');
    }
}
