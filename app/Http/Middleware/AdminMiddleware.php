<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if(Auth::check()){
            if(Auth::user()->role_as=='1'){
               return $next($request);
            }
            else{
                return redirect()->route('home')->with('status','Access denied.As you are not an Admin');
            }

        }
        else{
            return redirect()->route('login')->with('status','Please login first');
         }
       
        
    }
}
