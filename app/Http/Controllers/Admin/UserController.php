<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //处理注册成功跳转而来的操作
	public function __construct(){
       $this->middleware('admin.auth');
    }

    public function profile(Request $request)
    {
	
		//$user=$request->user();
		return redirect('/admin');
		
    }
	
	
}
