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
        $request->session()->put('notification', $post_id);
        return redirect()->route('postManagerHome.pendingPost');
    }

    public function posDelete($post_id, Request $request){
        DB::table('post_details')
            ->where('post_id', '=', $post_id)
            ->delete();

        $deleteMessage = "post id: ".$post_id." successfully deleted";
        $request->session()->put('notification', $deleteMessage);
        return redirect()->route('postManagerHome.pendingPost');
    }

    public function postWarning($post_id, Request $request){
        $postCreatorId = DB::table('post_details')
                            ->select('user_id')
                            ->where('post_id', '=', $post_id)
                            ->first();

        $getWarningCount = DB::table('account_warning')
                                ->select('warning_count')
                                ->where('user_id', $postCreatorId->user_id)
                                ->first();

        DB::table('account_warning')
            ->where('user_id', $postCreatorId->user_id)
            ->update(['warning_count' => $getWarningCount->warning_count+1]);

        DB::table('post_details')
            ->where('post_id', $post_id)
            ->update(['post_status' => 'Approved']);

        $postWarningMessage = "post id: ".$post_id." successfully approved with warning.";
        $request->session()->put('notification', $postWarningMessage);
        return redirect()->route('postManagerHome.pendingPost');
    }

    public function postBlock($post_id, Request $request){
        $postCreatorId = DB::table('post_details')
                            ->select('user_id')
                            ->where('post_id', '=', $post_id)
                            ->first();

        DB::table('account_block_request')
            ->where('user_id', $postCreatorId->user_id)
            ->update(['block_status' => "Pending"]);

        DB::table('post_details')
            ->where('post_id', '=', $post_id)
            ->delete();

        $postWarningMessage = "post id: ".$post_id." successfully deleted with block request to; ".$postCreatorId->user_id;
        $request->session()->put('notification', $postWarningMessage);
        return redirect()->route('postManagerHome.pendingPost');
    }
}
