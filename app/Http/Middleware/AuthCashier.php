<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCashier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $is_valid   = $request->session()->get('is_cashier_valid');
        
        if (!$is_valid) {
            session()->flash('message-error', 'Se ha cerrado sesión');
            return to_route('login.index'); 
        };
        
        return $next($request);
    }
}
