<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BelumLogin
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
        $user = Auth::user();
        if (!Auth::check()) {
            return $next($request);
        } else {
            if ($user->status == 'admin') {
                return redirect("admin")->with("pesan", "Selamat Datang!!!");
            } else if ($user->status == 'kwitansi') {
                return redirect("kwitansi")->with("pesan", "Selamat Datang!!!");
            } else {
                return redirect("surat_tugas")->with("pesan", "Selamat Datang!!!");
            }
        }
    }
}
