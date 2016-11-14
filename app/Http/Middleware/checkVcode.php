<?php

namespace App\Http\Middleware;

use Closure;

class checkVcode
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
	
		
		$userInput = $request->get('code');
		$code= $request->session()->get('xmcode');
		//dd($code.'-'.$userInput);
		if(strtolower($userInput) == strtolower($code)) {
			//用户输入验证码正确  进入跳转控制器
			 return $next($request);
		} else {
			//用户输入验证码错误
			return back();
		}
	
		
		
       
    }
}
