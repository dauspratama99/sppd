<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $status)
    {
        $user = Auth::user();
        if (!Auth::check()) {
            return redirect('/');
        } elseif ($user->status == $status) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
