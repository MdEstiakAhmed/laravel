<?php

namespace App\Http\Controllers\UserControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post_comment;
use App\Models\Post_details;

class UserPostController extends Controller
{
    public function ajaxPost(Request $request){
        if($request->session()->has('user_id')){

        	//$post_id = 21320;
        	$post_id = $request->post_id;
	        
	        $post_details = Post_details::with('comments')
	        				->where('post_id',$post_id)
	        				->first();

            //dd($post_details->comments[0]->comment_text);

            $comments = $post_details->comments;
            //dd($comments[0]);
            $count = count($post_details->comments);
            $i = 0;

            $comment_data = null;


            while ($i < $count) {

                $comment_data .= "<table>
                                    <tr>
                                        <ul class='img-comment-list' style='overflow: hidden'>
                                            <li>
                                                <div class='comment-img'>
                                                    <img src='../storage/".$comments[$i]->user_details->image."' class='img-responsive img-circle' alt='Image'/>
                                                </div>
                                                <div class='comment-text'>
                                                    <strong><a href=''>".$comments[$i]->user_details->first_name." ".$comments[$i]->user_details->last_name."</a></strong>
                                                    <p>".$comments[$i]->comment_text."</p> <span class='date sub-text'>on December 5th, 2016</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </tr>
                                </table>";
                $i++;
            }
            
            //dd($comments[0]->user_details->image);



	        return response()->json(array('post_data'=> $post_details, 'comment_data'=> $comment_data), 200);            
        }
        else{
            return redirect('/');
        }
    }

    public function ajaxComment(Request $request){

        if($request->session()->has('user_id')){

            $user_id = $request->session()->get('user_id');
            $post_id = $request->hidden_post_id;
            //dd($post_id);

            $status = DB::table('post_comments')->insert([

                'post_id'       => $post_id,
                'user_id'       => $user_id,
                'comment_text'  => $request->comment_text,
            ]);

            if($status){

                $comments = Post_comment::with('user_details')
                            ->where('post_id',$post_id)
                            ->get();
                
                return redirect()->route('userHome.index');
                //dd($comments);
                //return response()->json(array('comment_data'=> $comments), 200);
            }

            else{
                return response('Error');
            }            
        }
        else{
            return redirect('/');
        }
    }

    public function ajaxLike(Request $request){

        if($request->session()->has('user_id')){

            $user_id = $request->session()->get('user_id');
            $post_id = $request->post_id;
            
            //$post_id = 21320;
            //dd($post_id);

            $status = DB::table('post_likes')
            ->where('user_id', $user_id)
            ->where('post_id', $post_id)
            ->first();

            //dd($status);

            if ($status!=null) {

                DB::table('post_likes')
                ->where('user_id', $user_id)
                ->where('post_id', $post_id)
                ->delete();
            }
            else{
                
                DB::table('post_likes')->insert([
                    'post_id'       => $post_id,
                    'user_id'       => $user_id,
                ]);
            }

            $likes = DB::table('post_likes')
                        ->where('post_id',$post_id)
                        ->count();
            
            return response()->json(array('likes'=> $likes), 200);
        }

        else{
            return redirect('/');
        }
    }


}
