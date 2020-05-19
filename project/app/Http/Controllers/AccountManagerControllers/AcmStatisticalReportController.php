<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AcmStatisticalReportController extends Controller
{
    public function Index($searchBy, Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$data = DB::table('user_details')
						->leftJoin('account_warning','user_details.user_id','=','account_warning.user_id')
						->rightJoin('account_block_request','user_details.user_id','=','account_block_request.user_id')
						->get();
			
			
			$acccCount = DB::table('user_details')->value(DB::raw('count(*)'));
			$acmValids = DB::table('user_details')->where('user_type','account.manager')->value(DB::raw('count(*)'));
			$pcmValids = DB::table('user_details')->where('user_type','post.manager')->value(DB::raw('count(*)'));
			$userValids = DB::table('user_details')->where('user_type','user')->value(DB::raw('count(*)'));
			$acmDeactivs = DB::table('user_details')->where('user_type','account.manager')->where('account_status','Deactivated')->value(DB::raw('count(*)'));
			$pcmDeactivs = DB::table('user_details')->where('user_type','post.manager')->where('account_status','Deactivated')->value(DB::raw('count(*)'));
			$userDeactivs = DB::table('user_details')->where('user_type','user')->where('account_status','Deactivated')->value(DB::raw('count(*)'));
			
			$acmBlocks = DB::table('account_block_request')->leftJoin('user_details','account_block_request.user_id','user_details.user_id')->where('account_block_request.block_status','Blocked')->where('user_details.user_type','account.manager')->value(DB::raw('count(*)'));
			$pcmBlocks = DB::table('account_block_request')->leftJoin('user_details','account_block_request.user_id','user_details.user_id')->where('account_block_request.block_status','Blocked')->where('user_details.user_type','post.manager')->value(DB::raw('count(*)'));
			$userBlocks = DB::table('account_block_request')->leftJoin('user_details','account_block_request.user_id','user_details.user_id')->where('account_block_request.block_status','Blocked')->where('user_details.user_type','user')->value(DB::raw('count(*)'));
		
			$acmCount = $acmValids.'-'.$acmDeactivs.'-'.$acmBlocks;
			$pcmCount = $pcmValids.'-'.$pcmDeactivs.'-'.$pcmBlocks;
			$userCount = $userValids.'-'.$userDeactivs.'-'.$userBlocks;
			
			$totBlocks   = DB::table('account_block_request')->where('block_status','Blocked')->value(DB::raw('count(*)'));
			$totUnblocks = DB::table('account_block_request')->where('block_status','Unblocked')->value(DB::raw('count(*)'));
			$totPendings = DB::table('account_block_request')->where('block_status','Pending')->value(DB::raw('count(*)'));
			
			$tots = $totBlocks.'-'.$totUnblocks.'-'.$totPendings;
			
			return view('AccountManagerViews.statistical', ['user' => $user,'data' => $data,'acmCount' => $acmCount,'pcmCount' => $pcmCount,'userCount' => $userCount,'acccCount' => $acccCount,'tots' => $tots]);
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
			
            if($status1)
			{
				if($status2)
				{
					return redirect()->route('AcmReport.Index','General');
				}
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
                        ->update(['block_status'=>'Pending']);
			
			$status2 = DB::table('user_details')
						->where('user_id', $id)
                        ->update(['account_status'=>'Activated']);
			
            if($status1)
			{
				if($status2)
				{
					return redirect()->route('AcmHome.Index');
				}
			}
        }
        else{
            return redirect('/logout');
        }
    }
}
