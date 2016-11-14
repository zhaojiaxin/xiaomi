<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class pptController extends Controller
{
	//商品图片显示
	public function ppt(){
		$user=DB::table('ppt')->get();
		return view('Admin.ppt.ppt',['user'=>$user]);
	}
	
	//商品增加视图
	public function pptadd(){
		//显示视图模型
		return view('Admin.ppt.pptadd');
	}
	//增加操作
	public function pptadds(Request $request){
		//接收表单数据
		$user=$request->only(['gname','descript']);
		//dd($user);
		if($request->hasfile('photo'))
		{
			$file=$request->file('photo');
			//文件路径
			$dir='uploads/';
			//文件名称
			$fname=uniqid().'.'.$file-> getClientOriginalExtension();
			
			//移动文件
			$request->file('photo')->move($dir,$fname);
			
			//设置文件路径
			$user['photo']=$dir.$fname;
		}else{
			//上传文件失败继续页面
			$wbdd['photo'] = $request->photo;
		}
		//插入到数据库库中
		$res=DB::table('ppt')->insert($user);
		//dd($res);
		if($res){
			return redirect('ppt/ppt');
		}else{
			return '失败';
		}
		
	}
	//删除操作
	public function pptdelete($id){
		$res = DB::table('ppt')->where('id','=',$id)->delete();
		if($res){
			return redirect('/ppt/ppt');
		}else{
			return redirect('/ppt/pptdelete');
		}
	}
	//图片修改视图
	public function	pptupdate($id){
		//回填操作
		$huitian=DB::table('ppt')->where('id','=',$id)->first();
		return view('Admin.ppt.pptupdate',['huitian'=>$huitian]);
	}
	//图片修改操作
	public function pptup(Request $request){
		$adminup=$request->only(['gname','descript','state']);
		//dd($adminup);
		$id = $request->only(['id']);
		//dd($id);
		if($request->hasfile('photo')){
			$file=$request->file('photo');
			//文件路径
			$dir='uploads/';
			//文件名称
			$fname=uniqid().'.'.$file-> getClientOriginalExtension();
			
			//移动文件
			$request->file('photo')->move($dir,$fname);
			
			//设置文件路径
			$adminup['photo']=$dir.$fname;
			
			//判断上传文件是否成功
		}
		/* else{
			//上传文件失败继续修改页面
			return redirect('');
			//$adminup['photo'] = $request->photo;
		} */
		//dd($adminup);
		$res = DB::table('ppt')->where('id','=',$id)->update($adminup);
		
		//dd($res);
		if($res){
			return redirect('ppt/ppt');
		}else{
			return '失败';
		}
	}
}	
