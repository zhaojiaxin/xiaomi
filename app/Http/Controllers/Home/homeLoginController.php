<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Session;


class homeLoginController extends Controller
{

	//ǰ̨��¼��ת
    public function index(){
    	return view('Home.index');
    }

    //ǰ̨��¼��֤
	public function postLogin(Request $request){
		//���ձ�����
		$userInfo = $request -> only(['email','password']);
		//��ѯ���ݿ�
		$result1 = DB::table('users')->where('email','=',$userInfo['email'])->first();

		//�����˺�Ȩ���ж�
		if($result1->status !==0){
		    return redirect('/auth/login');
		}

		//�����˺��ж�
		if(!$result1 || $userInfo['email'] ==''){
			return redirect('/auth/login');
			exit;
		}

		//���������ж�
		if($result1->password !== md5($userInfo['password']) || $userInfo['password'] ==''){
			return redirect('/auth/login');
			exit;
		}

		$request->session()->put('id', $result1->id);

		return redirect('/Home/index');
	}

	//ǰ̨��¼��ʾ
	public function index(Request $request){
		//ͨ��sessionֵ��ȡ�û�id
		$session = $request->session()->all();

		//ͨ���û�id��ȡ�û���Ϣ������Ϣ
		$result = DB::table('users')->where('id','=',$session['id'])->get();
		//dd($session);
		return view('Home.index',['result'=>$result]);

	}

	//ǰ̨�˳���¼
	public function loginOut(Request $request){
    	//ɾ��session
    	$request->session()->flush();

    	return view('Home.index');
    }
}
