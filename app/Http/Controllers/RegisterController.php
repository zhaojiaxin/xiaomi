<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//引用验证码的类库
use Gregwar\Captcha\CaptchaBuilder;
use Session;

use DB;
class RegController extends Controller
{
    /**
     * 注册页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('register.Index');
    }


	public function code(){
		$builder = new CaptchaBuilder;
		$builder->build(120,40);
		Session::set('phrase',$builder->getPhrase()); //存储验证码
		//获取到验证码的值
		$phrase = $builder->getPhrase();
		//把内容存入session
        Session::put('phrase', $phrase);
		//返回验证码图片的视图
		return response($builder->output())->header('Content-type','image/jpeg');
	}

	public function checkname($name){
		$result=DB::table('user')->where('username','=',$name)->get();
		if($result==true){
			return 1;
		}else{
			return 0;
		}
	}

	public function doreg(Request $request){

		//获取验证码的值
		$phrase = Session::get('phrase');
		//获取用户传递过来的值
		$form = $request->all();
		//dd($form);
		//查询
		$result=DB::table('users')->where('name',$form['name'])->first();
		//dd($result);
		$pwd=$form['pwd'];

		if(){

		}else{

		}
		/*if($phrase == $form['code']&& $result==null){
			/*$result1=DB::table('users')->insert(array('name'=>$form['name'],'userpwd'=>md5($pwd),'email'=>$form['email']);
			$uid=DB::table('users')->where('name',$form['name'])->value('id');
			$result2=DB::table('userdetail')->insert(array('user_id'=>$uid));
			if($result1 && $result2){
				return redirect('/');
			}
			else{
				return redirect('/register/index')->with();
			}
		}
		else{
			return redirect('/register/index');
		}	*/
	}

}
