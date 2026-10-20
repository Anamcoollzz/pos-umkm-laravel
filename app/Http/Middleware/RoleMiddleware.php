<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if (! in_array($user->role, $roles, true)) {
            abort(403, 'Akses Ditolak: Halaman ini hanya dapat diakses oleh peran: '.implode(', ', $roles).'. Peran Anda saat ini: '.($user->role ?? 'tidak ada').'.');
        }

        return $next($request);
    }
}
