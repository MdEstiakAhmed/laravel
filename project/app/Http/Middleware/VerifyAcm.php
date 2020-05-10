<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAcm
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->has('AcmStatus')){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
