<?php

namespace App\Http\Controllers\AccountManagerControllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use PDF;

class AcmReportController extends Controller
{
    public function Index($searchBy, Request $request){
		
        if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$data = DB::table('account_warning')
						->rightJoin('user_details','user_details.user_id','=','account_warning.user_id')
						->orderBy('user_details.user_id')
						->get();
						
			$blockData = DB::table('account_block_request')->get();
			
			
			
        }
        else{
            return redirect('/logout');
        }
    }
	
	public function Download($searchBy, Request $request){
		
		if($request->session()->has('user_id') && $request->session()->has('acmStatus')){

            $user = DB::table('user_details')
                        ->where('user_id', $request->session()->get('user_id'))
                        ->first();
			
			$data = DB::table('account_warning')
						->rightJoin('user_details','user_details.user_id','=','account_warning.user_id')
						->orderBy('user_details.user_id')
						->get();
						
			$blockData = DB::table('account_block_request')->get();
			
			
				$pdf = PDF::loadView('AccountManagerViews.download', compact('user','data','blockData','reportState'));
				return $pdf->download($timeTrack.'.pdf');
			
        }
        else{
            return redirect('/logout');
        }
	}
	
	public function AdvSearch(Request $request){
		
		$data = DB::table('account_warning')
					->rightJoin('user_details','user_details.user_id','=','account_warning.user_id')
					->where('user_details.first_name','like','%'.$request->keyword.'%')
					->orWhere('user_details.last_name','like','%'.$request->keyword.'%')
					->orderBy('user_details.user_id')
					->get();
					
		$blockData = DB::table('account_block_request')->get();
		
		
		
	}
}

// $data = DB::table('account_warning')
		// ->rightJoin('user_details','user_details.user_id','=','account_warning.user_id')
		// ->rightJoin('user_follower','user_details.user_id','=','user_follower.user_id')
		// ->orderBy('user_details.user_id')
		// ->select('count(user_id) as sett')
		// ->get();
		
