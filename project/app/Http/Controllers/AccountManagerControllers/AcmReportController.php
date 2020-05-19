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
			return view('AccountManagerViews.report', ['user' => $user,'data' => $data,'blockData' => $blockData,'reportState' => $searchBy]);
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
			
			return view('AccountManagerViews.report', ['user' => $user,'data' => $data,'blockData' => $blockData,'reportState' => $searchBy]);
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
		
		$msi='';
		$msg = '<table border="1px" width="100%">
					<tr>
						<th class="center-text">User ID</th>
						<th class="name-text">Name</th>
						<th class="center-text">Warnings</th>
						<th class="center-text">Account Status</th>
						<th class="center-text">Block Status</th>
					</tr>';
		$msg = $msg.$msi.'</table>';
		return response()->json(array('msg'=>$msg),200);
		
	}
}
