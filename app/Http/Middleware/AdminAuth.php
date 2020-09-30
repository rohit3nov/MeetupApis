<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{

    public function handle($request, Closure $next)
    {
        if($request->getUser() != env('ADMIN_USERNAME') || $request->getPassword() != env('ADMIN_PASSWORD')) {
            $headers = array('WWW-Authenticate' => 'Basic');
            return response('Unauthorized', 401, $headers);
        }
        return $next($request);
    }

}