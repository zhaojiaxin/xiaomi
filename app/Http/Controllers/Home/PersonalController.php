<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
use DB;
class PersonalController extends Controller
{
    /**
     * 个人详细信息
     *
     * @return \Illuminate\Http\Response
     */
    public function sink(Request $request)
    {
		$id = $request->session()->get('id');
		
		$userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
		
		$user=DB::table('users')->where('id','=',$id)->first();
		
        return view('Home.person.details',['userdetail'=>$userdetail,'user'=>$user]);
    }
	/**
     * 修改头像
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		//接收表单数据
		$id=$request->session()->get('id');
		
		$photo=$request->only(['photo']);
		
		$dir='uploads/';
		
		$fname = $photo['photo']-> getClientOriginalName();
		//接收上传文件
		if($request->hasFile('photo')){
			//移动文件
			$request->file('photo')->move($dir,$fname);
			//设置文件路径
			$photo['photo']=$dir.$fname;
		}else{
			//跳转到详细信息页面
			return redirect('/person/details');
		}
		
		$result=DB::table('users')->where('id','=',$id)->update($photo);
		
		if($result){//更新成功
				return redirect('/person/details');
		}else{
				return redirect('/person/details');
		}
 
    }
	/**
     * 修改信息
     *
     * @return \Illuminate\Http\Response
     */
	public function datum(Request $request)
	{

		$id=$request->session()->get('id');
		
		$name=$request->only(['name']);
		
		$userdetail=$request->only(['sex','YYYY','MM','DD']);
		
		$result=DB::table('userdetail')->where('user_id','=',$id)->update($userdetail);
		
		$result2=DB::table('users')->where('id','=',$id)->update($name);
		
		if($result&&$result2){//更新成功
				return redirect('/person/details');
		}else{
				return redirect('/person/details');
		}
		
	}
	/**
     * 修改地区
     *
     * @return \Illuminate\Http\Response
     */
	public function region(Request $request)
	{
	
		$id=$request->session()->get('id');
		
		$at=$request->only(['at']);
		
		$result=DB::table('users')->where('id','=',$id)->update($at);
		
		if($result)
		{//更新成功
				return redirect('/person/details');
		}else{
				return redirect('/person/details');
		}
		
	}
}
