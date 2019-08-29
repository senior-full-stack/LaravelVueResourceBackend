<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
      header('Access-Control-Allow-Origin: http://localhost:3000');
      header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
      header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token,Authorization');
      header('Access-Control-Allow-Credentials: true');
    }
}
