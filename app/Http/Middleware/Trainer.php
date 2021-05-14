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
        if(auth()->check() && auth()->user()->role == 3) {
            return $next($request);
        }

        return redirect()->route('login')->with('error',"Sorry. Access denied.");
    }
}
