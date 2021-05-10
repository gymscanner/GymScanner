<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class Trainer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $request->user() ){
            
            return $next($request);
            // user is logged in
        } else {
            // user is not logged in
            return redirect(RouteServiceProvider::HOME);
        }


    }
}
