<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class loginController extends Controller
{

	public function __construct(){
        $this->middleware('admin.auth');
    }
    //商城用户列表
    public function login(){
        //显示视图模板
        return view('Admin.login');
    }
	public function postLogin(Request $request){
		$Info=$request->only(['name','password']);
		$name=$Info['name'];
		$password1=$Info['password'];
		//$password=md5($password1);
		//dd($password);
		//dd($Info);
		
		//$result=DB::table('uesrs')->where()->has();
		//$result=DB::table('users')->where('name','=',$name)->select('password');
		//$result = DB::table('users')->where('email','=',$name)->first();
		//$result1=$result->password;
		//dd($result1);
		//dd($password);
		//显示视图模板
		//dd($result);
		/*
		if($result1==$password){
		
			return view('Admin.index');
		}else{
			return view('Admin.login');
		}
		*/
		
		return redirect('/admin');
		
		
		
		
		
	}

   

}
