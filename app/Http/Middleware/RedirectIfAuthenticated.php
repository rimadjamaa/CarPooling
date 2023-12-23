<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            $user = Auth::guard($guard)->user();
            if (Auth::guard($guard)->check()) {
                if ($user->role == 'admin') {
                    return redirect('/admin/home');
                } elseif ($user->role == 'driver') {
                    return redirect('/driver/home');
                } else {
                    return redirect('/user/home');
                }
            }
        }

        return $next($request);
    }
}
