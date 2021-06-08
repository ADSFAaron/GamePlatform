<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e

class AuthAdmin
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
<<<<<<< HEAD
        if (Auth::user()->utype === 'ADM')
=======
        if (session('utype') === 'ADM')
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e
        {
            return $next($request);
        }
        else{
            session()->flush();
            return redirect()->route('login');
        }
    }
}
