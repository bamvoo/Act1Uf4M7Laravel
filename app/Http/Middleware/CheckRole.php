<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if (! $request->user()->hasRole($role)) {
            // opció 1
            // abort(403, “Non authorized”);
            // Opció 2
            return redirect('home');
        }
        return $next($request);
    }
}
