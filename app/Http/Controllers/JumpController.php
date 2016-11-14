<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JumpController extends Controller
{
    //成功操作
	public function success(Request $request){
		//从请求中获取参数
		$message=$request->session()->get('message');
		$time=$request->session()->get('time');
		$url=$request->session()->get('url');
		return view('success',['message'=>$message,'time'=>$time,'url'=>$url]);
	}
	
	
	//失败操作
	public function error(){
		
		//从请求中获取参数
		$message=$request->get('message');
		$time=$request->get('time');
		$url=$request->get('url');
		return view('error',['message'=>$message,'time'=>$time,'url'=>$url]);
	}
}
