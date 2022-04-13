<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Marketer
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
        if (auth()->check() && auth()->user()->role == 4) {
            return $next($request);
        }
        // notify()->error('You dont have permission to access this page. Please login to verify');
        return redirect('login');

        // return $next($request);
    }
}
