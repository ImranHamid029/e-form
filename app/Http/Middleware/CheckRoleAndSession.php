<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CheckRoleAndSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            // Jika belum login, redirect ke halaman 404
            return response()->view('404', [], 404);
        }

        // Cek apakah role atau session valid
        $user = Auth::user();
        if (!$user->role || !session('officeCode')) {
            // Jika role atau session tidak ada, redirect ke halaman 404
            return response()->view('404', [], 404);
        }

        // Lanjutkan request jika valid
        return $next($request);
    }
}
