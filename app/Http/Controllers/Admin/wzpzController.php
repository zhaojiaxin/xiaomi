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
	//��վ�޸���ͼ
	public function	wzx($id){
		//�������
		$huitian=DB::table('web')->where('id','=',$id)->first();
    	return view('Admin.books.wzxg',['huitian'=>$huitian]);
	}
	//����s
	public function	wzup(Request $request){
		
		$adminup=$request->only(['title','keywords','status','description','copy']);
			//$adminup;
		$id = $request->only(['id']);
		
		if($request->hasfile('logo')){
			$file=$request->file('logo');
			//�ļ�·��
			$dir='uploads/';
			//�ļ�����
			$fname=uniqid().'.'.$file-> getClientOriginalExtension();
			
			//�ƶ��ļ�
			$request->file('logo')->move($dir,$fname);
			
			//�����ļ�·��
			$adminup['logo']=$dir.$fname;
			
			//�ж��ϴ��ļ��Ƿ�ɹ�
		}
		//dd($adminup);
		$res = DB::table('web')->where('id','=',$id)->update($adminup);
		//dd($res);
		//dd($res);
		if($res){
			return redirect('/books/wzxq');
		}else{
			return 'ʧ��';
		}
	}
	
}