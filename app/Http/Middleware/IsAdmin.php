<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   /*public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == '1'){
            return $next($request);
        }

        return redirect('adminHome')->with('error',"You don't have admin access.");
    }
    
    */
    
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->is_admin == '1'){
                return $next($request);
                //return redirect()->route('admin.home');
            } else{
                return redirect('/homepages/index')->with('message','Access Denied as you are not Admin');
            }
        } else {
            return redirect('/login')->with('message','Login to access the web site info');
        }
        
    }

       
    
}
