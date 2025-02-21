<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect('/')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil role pengguna dari relasi `role`
        $userRole = Auth::user()->role;

        // Jika route memerlukan role tertentu
        if ($role) {
            // Jika pengguna tidak memiliki role
            if (!$userRole) {
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
            }

            // Jika role pengguna tidak sesuai dengan yang diizinkan
            if ($userRole->name !== $role) {
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
            }
        }

        // Lanjutkan request jika pengguna memiliki role yang sesuai atau route tidak memerlukan role
        return $next($request);
    }
}