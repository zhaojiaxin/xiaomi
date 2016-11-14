<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class wzpzController extends Controller
{
	public function wzxq(){
		$user=DB::table('web')->get();
		return view('Admin.books.wzxq',['user'=>$user]);
	}
	//网站修改视图
	public function	wzx($id){
		//回填操作
		$huitian=DB::table('web')->where('id','=',$id)->first();
    	return view('Admin.books.wzxg',['huitian'=>$huitian]);
	}
	//操作s
	public function	wzup(Request $request){
		
		$adminup=$request->only(['title','keywords','status','description','copy']);
			//$adminup;
		$id = $request->only(['id']);
		
		if($request->hasfile('logo')){
			$file=$request->file('logo');
			//文件路径
			$dir='uploads/';
			//文件名称
			$fname=uniqid().'.'.$file-> getClientOriginalExtension();
			
			//移动文件
			$request->file('logo')->move($dir,$fname);
			
			//设置文件路径
			$adminup['logo']=$dir.$fname;
			
			//判断上传文件是否成功
		}
		//dd($adminup);
		$res = DB::table('web')->where('id','=',$id)->update($adminup);
		//dd($res);
		//dd($res);
		if($res){
			return redirect('/books/wzxq');
		}else{
			return '失败';
		}
	}
	
}