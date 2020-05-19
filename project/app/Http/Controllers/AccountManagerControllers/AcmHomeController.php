<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

class AcmHomeController extends Controller
{
    public function Index(Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$data = DB::table('user_details')
						->leftJoin('account_warning','user_details.user_id','=','account_warning.user_id')
						->rightJoin('account_block_request','user_details.user_id','=','account_block_request.user_id')
						->where('account_block_request.block_status','Blocked')
						->get();
			$msgData = DB::table('message_details')
						->leftJoin('user_details','user_details.user_id','=','message_details.user_id')
						->orderBy('message_details.message_time','asc')
						->get();
			
			$postCount = DB::table('post_details')->value(DB::raw('count(*)'));
			$acccCount = DB::table('user_details')->value(DB::raw('count(*)'));
			$blckCount = DB::table('account_block_request')->where('block_status','Blocked')->value(DB::raw('count(*)'));
			$accsCount = DB::table('user_details')->where('account_status','Deactivated')->value(DB::raw('count(*)'));
			
			return view('AccountManagerViews.home', ['user' => $user,'data' => $data,'msgData' => $msgData,'postCount' => $postCount,'acccCount' => $acccCount,'accsCount' => $accsCount,'blckCount' => $blckCount]);
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function Block($id,Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

			$rowData = DB::table('account_block_request')
						->where('user_id',$id)
						->first();
			
			if($rowData!=null)
			{
				$status1 = DB::table('account_block_request')
							->where('user_id', $id)
							->update(['block_status'=>'Blocked']);
			}
			else
			{
				$status1 = DB::table('account_block_request')
							->insert(['user_id' => $id,
									  'block_status' => 'Blocked']);
			}
			
            
			
			$status2 = DB::table('user_details')
						->where('user_id', $id)
                        ->update(['account_status'=>'Deactivated']);
			
            if($status2)
			{
				return redirect()->route('AcmReport.Index','General');
			}
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function Unblock($id,Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $status1 = DB::table('account_block_request')
						->where('user_id', $id)
                        ->update(['block_status'=>'Unblocked']);
			
			$status2 = DB::table('user_details')
						->where('user_id', $id)
                        ->update(['account_status'=>'Activated']);
			
            if($status2)
			{
				return redirect()->route('AcmReport.Index','General');
			}
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function MessagePost(Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){
			
			$Validation = Validator::make($request->all(), [
				'msg'=>'required'
			]);

			if($Validation->fails()){
				return back()
						->with('errors', $Validation->errors())
						->withInput();
			}
			
            $status = DB::table('message_details')
					->insert([  'message_id'     => Null,
								'user_id'	  	 => $request->session()->get('user_id'),
								'message_text'	 => $request->msg,
								'message_time'   => Date('yy-m-d h:i')
								]);
			
			if(!$status){
				// return redirect()->route('AcmHome.Index');
			}else{
				return redirect('/home/AccountManager');
			}
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function MessageDelete($msgID, Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $status = DB::table('message_details')
						->where('message_id',$msgID)
						->delete();
			if(!$status){
				// return redirect()->route('AcmHome.Index');
			}else{
				return redirect()->route('AcmHome.Index');
			}
        }
        else{
            return redirect('/logout');
        }
    }
}
