<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EmployeeIdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        if (auth()->user() && !auth()->user()->wonde_employee_id) {
            auth()->logout();
            return redirect(route('login'))
                ->with('status', 'You do not have a Wonde Rmployee ID associated with your account. Plese contact an administrator.');
        }

        return $next($request);
    }
}
