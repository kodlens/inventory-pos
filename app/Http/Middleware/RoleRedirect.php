<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $role = Auth::user()->role;
            switch($role) {
                case 'admin':
                    return redirect()->route('admin.dashboard.index');
                case 'staff':
                    return redirect()->route('staff.dashboard.index');
                // case 'learner':
                //     return redirect()->route('learner.dashboard.index');
            }
        }else{
            return $next($request);
        }
    }
}
