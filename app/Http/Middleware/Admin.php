<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
<<<<<<< HEAD
			return $next($request);

        }
		
		    return redirect('/home');


=======
            return $next($request);
        }

        return redirect('/home');
>>>>>>> fee2db1f8d82c5090212e7647fa103a9d5ae2e08
    }
}
