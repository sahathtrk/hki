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
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = auth()->user()->role;
            switch ($role) {
                case 'admin':
                    return redirect()->route('admin_dokumen');
                case 'pimpinan':
                    return redirect()->route('pimpinan_dokumen');
                case 'kepaladepartemen':
                    return redirect()->route('kepala_departemen');
                case 'pelayan':
                    return redirect()->route('pelayan_dokumen');
            }
        }

        return $next($request);
    }
}
