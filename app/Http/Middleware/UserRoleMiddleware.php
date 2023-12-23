<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'You are not authenticated.'], 401);
        }

        // Check if the user's role matches the expected role
        if (Auth::user()->role === $role) {
            return $next($request);
        }else{
            return response()->json(['error' => 'You do not have permission to access this page.'], 403);
        }
    }

}
