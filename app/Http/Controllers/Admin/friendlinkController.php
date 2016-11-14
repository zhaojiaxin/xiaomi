<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class friendlinkController extends Controller
{
	//友情 链接显示模板视图
   public function friendlink(){
		$res = DB::table('friendlink')->get();
		return view('Admin.friendlink.friendlink',['res'=>$res,'num'=>1]);
   }
   
   //-------增加视图
   
	public function friendlinkzj(){
	
		return view('Admin.friendlink.friendlinkzj');
   }
   //增加操作
	public function addfriendlinkzj(Request $request){
	
		//接收表单数据
		$url=$request->only(['yname','yurl']);
		//dd($url);
		
		//插入到数据库库中
		$res=DB::table('friendlink')->insert($url);
		if($res){
			return  redirect('/friendlink/friendlink');
		}else{
			return '失败';
		}
			//return redirect('/friendlink/friendlink');
  }
  

  //友情链接删除
    public function  frienddelete($id){
		$delete = DB::table('friendlink')->where('id','=',$id)->delete();
		if($delete){
			return redirect('friendlink/friendlink');
		}else{
			return '删除失败';
		}
	}
	//友情链接修改视图
	public function friendupdate($id){
		//回填操作
		$huitian=DB::table('friendlink')->where('id','=',$id)->first();
		return view('Admin.friendlink.friendupdate',['huitian'=>$huitian]);
	}
	//友情修改链接操作
	public function friendup(Request $request){
		$adminup=$request->only(['yname','yurl','ystatus']);
			//dd($adminup);
		$id = $request->only(['id']);
		
		
		//dd($adminup);
		$res = DB::table('friendlink')->where('id','=',$id)->update($adminup);
		//dd($res);
		if($res){
			return redirect('friendlink/friendlink');
		}else{
			return '失败';
		}
	}

	
}