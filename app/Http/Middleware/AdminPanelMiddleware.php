<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ((int) auth()->user()->role !== User::ROLE_ADMIN) {
            return redirect()->route('main');
        }
        return $next($request);
    }
}
