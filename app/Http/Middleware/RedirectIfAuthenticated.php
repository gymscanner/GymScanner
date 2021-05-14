<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                $role = auth()->user()->role; 
                switch ($role) {
                  case 1:
                    return redirect('/admin');
                    break;
                  case 2:
                    return redirect('/myprofile');
                    break;
                  case 3:
                    return redirect('/personal_myprofile');
                    break;

                  default:
                    return redirect('/');
                  break;
                }
            }
        }

        return $next($request);
    }
}
