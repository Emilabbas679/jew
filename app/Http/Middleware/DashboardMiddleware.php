<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        if (!Auth::check()) {
            return redirect('login');
        }
        $user = Auth::user();
        if ($user->hasRole('user')) {
            return redirect('home');
        }
        return $next($request);
    }
}

