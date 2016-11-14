<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class uderAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		//分配到模板中(分配变量需要使用名称=值的方式/数组分配到模板使用->访问)
        //获取登录用户信息
        $user=$request->user();
		//查询所有收货地址
		$address=DB::table('useraddress')->where('user_id',$user['id'])->get();
		//dd($user['id']);
		
        $types = DB::table('goodstype')->select('tid','tname','is_topnav','is_leftnav')->get();

		
		return view('Home.address.address',['address'=>$address]);
		
		
	}
	
	public function del($aid)
	{
		//删除商品
		$result=DB::table('useraddress')->where('id','=',$aid)->delete();
		
		//返回字符串
		if($result){
			return '1';
		}else{
			return '0';
		}	
	}
	
	public function add(Request $request)
	{
		//接收表单数据
		$addInfo=$request->only(['id','user_id','name','phone','province','city','area','address','code']);

		//dd($addInfo);
		
		//插入到数据库库中
		$result=DB::table('useraddress')->insert($addInfo);
		// 判断是否插入成功
		
		if($result){//成功
			// 跳转到地址
			return redirect('/home/address');
		}else{//失败
			// 跳转到地址添加页面
			return redirect('/admin');
		}	
		
	}
	
	public function update(Request $request)
	{
			
		
	}
}
