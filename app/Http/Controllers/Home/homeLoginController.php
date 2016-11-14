<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Session;


class homeLoginController extends Controller
{

	//前台登录跳转
    public function index(){
    	return view('Home.index');
    }

    //前台登录验证
	public function postLogin(Request $request){
		//接收表单数据
		$userInfo = $request -> only(['email','password']);
		//查询数据库
		$result1 = DB::table('users')->where('email','=',$userInfo['email'])->first();

		//进行账号权限判断
		if($result1->status !==0){
		    return redirect('/auth/login');
		}

		//进行账号判断
		if(!$result1 || $userInfo['email'] ==''){
			return redirect('/auth/login');
			exit;
		}

		//进行密码判断
		if($result1->password !== md5($userInfo['password']) || $userInfo['password'] ==''){
			return redirect('/auth/login');
			exit;
		}

		$request->session()->put('id', $result1->id);

		return redirect('/Home/index');
	}

	//前台登录显示
	public function index(Request $request){
		//通过session值获取用户id
		$session = $request->session()->all();

		//通过用户id获取用户信息所有信息
		$result = DB::table('users')->where('id','=',$session['id'])->get();
		//dd($session);
		return view('Home.index',['result'=>$result]);

	}

	//前台退出登录
	public function loginOut(Request $request){
    	//删除session
    	$request->session()->flush();

    	return view('Home.index');
    }
}
