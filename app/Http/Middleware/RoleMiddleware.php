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
    public function handle(Request $request, Closure $next, $role)
    {
        // Jika pengguna sudah login dan mengakses halaman login
        if (Auth::check() && $request->routeIs('login-admin')) {
            return redirect()->route('dashboard')->withErrors(['login_error' => 'Anda sudah login, tidak bisa kembali ke halaman login.']);
        }

        // Jika pengguna belum login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['login_error' => 'Silakan login terlebih dahulu.']);
        }

        // Jika role pengguna tidak sesuai
        if (Auth::user()->role !== $role) {
            return redirect()->route('login')->withErrors(['login_error' => 'Anda tidak memiliki akses ke halaman ini.']);
        }

        return $next($request);
    }
}

