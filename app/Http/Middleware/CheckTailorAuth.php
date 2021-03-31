<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckTailorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->roles) {
            $roles = auth()->user()->roles;
            foreach ($roles as $value) {
                if ($value->name == 'tailor') return $next($request);
            }
        }
        return redirect()->route('dashboard');
    }
}