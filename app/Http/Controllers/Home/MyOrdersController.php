<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	
		$user=$request->user();
		$id=$user['id'];
		
        //获取所有的订单
		$orders=DB::table('order')
				->join('goods','order.good_id','=','goods.gid')
				->join('users','users.id','=','order.user_id')
				->select('order.*','users.name','goods.gname','goods.logo')
				->where('user_id','=',$id)
				->Paginate(3);
		//dd($orders);
		//显示视图模板
		return view('Home.myorder.myorders',['orders'=>$orders]);
    }
		
	
	public function pay($aid)
    {
		
        //修改订单状态
		$result=DB::table('order')->where('id','=',$aid)->update(['order_status'=>1]);
		//echo $result;
		//返回字符串
		if($result){
			echo '1';
		}else{
			echo '0';
		}	
		
    }
	
	public function cancel($aid)
    {
        //修改订单状态
		$result=DB::table('order')->where('id','=',$aid)->update(['order_status'=>3]);
		//echo $result;
		//返回字符串
		if($result){
			echo '1';
		}else{
			echo '0';
		}	
		
    }
}
