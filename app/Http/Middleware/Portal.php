<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Portal
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
        if (Auth::user()->role == 2) {
            return $next($request);
        }
        return redirect()->back()->with(['message' => "Anda Tidak Bisa Mengakses Halaman Ini"]);
    }
}
