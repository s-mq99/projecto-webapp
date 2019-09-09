<?php

namespace App\Http\Middleware;

use Closure;

class Authorization
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
         $user = auth()->user();
        if($user->admin == false){
                return redirect()->guest(route('notauth'));
        }


        return $next($request);
    }
}
