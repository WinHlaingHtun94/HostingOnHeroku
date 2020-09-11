<?php

namespace App\Http\Middleware;

use Closure;

class OrderConfirm
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
        if((auth()->user()->premium_user == 1) || (auth()->user()->pro_user == 1) || (auth()->user()->starter_user == 1)){
            return $next($request);                                          
        }else{
            return redirect()->route('look_meal')->with("order_error","Your account is not sign up in any user level currently! So, you can't order the meals. If you want to oreder meals, Please singup as Premium User or Pro User or Starter User in home page or your profile page!!");
        }
    }
}
