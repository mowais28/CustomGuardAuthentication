<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Request as clientRequest;

class loginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guard('new_users')->check() == '' && clientRequest::is("dash")){
            return redirect('/');
        }
        else if(auth()->guard('new_users')->check() == 1 && clientRequest::is("/")){
            return redirect('dash');
        }
        return $next($request);
    }
}
