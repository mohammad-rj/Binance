<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
    
        // dd(get_class_methods(get_class(auth())));
        if (auth()->check()) {
            if (auth()->user()->role) {
                return $next($request);
            }
            return redirect(route('user.top'));
        }
        return redirect(RouteServiceProvider::HOME);   
    }
}
