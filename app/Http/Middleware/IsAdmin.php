<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;

class IsAdmin extends Middleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards) {

        if(auth()->user()->is_admin == 1 && auth()->user()->id == 2) {
            return $next($request);
        }

        abort(403);

    }
}
