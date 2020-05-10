<?php

namespace App\Http\Middleware;

use Closure;

class UserVerify
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->has('user_id')){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
