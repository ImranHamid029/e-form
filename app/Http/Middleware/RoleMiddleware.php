<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  mixed  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
{
    // Jika pengguna sudah login dan mengakses halaman login
    if (Auth::check() && $request->routeIs('login-admin')) {
        return redirect()->route('dashboard')->withErrors(['login_error' => 'Anda sudah login, tidak bisa kembali ke halaman login.']);
    }

    // Jika pengguna belum login
    if (!Auth::check()) {
        return redirect()->route('login')->withErrors(['login_error' => 'Silakan login terlebih dahulu.']);
    }

    // Periksa apakah role pengguna ada dalam daftar role yang diperbolehkan
    if (!in_array(Auth::user()->role, $roles)) {
        return redirect()->route('login')->withErrors(['login_error' => 'Anda tidak memiliki akses ke halaman ini.']);
    }

    return $next($request);
}

}

