<?php

namespace App\Http\Middleware;

use Closure;

class cross
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
       $request = app('request');
        if ($request->isMethod('OPTIONS'))
        {
          app()->options($request->path(), function() { return response('', 200); });
        }

        $response = $next($request);
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Headers',$request->header('Access-Control-Request-Headers'));
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT');
        return $response;

    }
}
