<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsKepalaDepartemen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role=="kepaladepartemen"){
            return $next($request);
        }
        return redirect()->route('home')->with('error', 'Anda tidka memiliki akses Kepala Departemen');
    }
}
