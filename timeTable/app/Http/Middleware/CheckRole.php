<?php

namespace KaravayPro\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($request->user()===null)
        {
            return response("incifisient permission",401);
        }
        $actions=$request->route()->getAction();

        return $next($request);
    }
}
