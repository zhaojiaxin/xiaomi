<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    //订单列表
    public function index(){
        //获取所有的订单
		$orders=DB::table('order')->Paginate(3);
		//dd($orders);
		//显示视图模板
		return view('Admin.orders.list',['orders'=>$orders]);
    }
	//修改订单页面
	public function modify($id){
        //根据商品id查询商品详情
		$orderInfo=DB::table('order')->where('id',$id)->first();
		//dd($goodsInfo);
		//将查询的商品信息分配到模板显示
		return view('Admin.orders.modify',['order'=>$orderInfo]);
    }
	//更新数据
	public function update(Request $request){
    	$need = array('id','order_status','total_price');
		//dd($need);
		//接收数据
    	$orderInfo = $request->only($need);
    	//更新数据
    	$result = DB::table('order')->where('id',$orderInfo['id'])->update($orderInfo);
        //判断是否更新成功
        if($result){
        	//return 'chenggong';
        	return redirect('/orders/list/');
        }else{
        	//return 'shibai';
			return redirect('/orders/modify/'.$orderInfo['id']);
        }

    }

    //等待发货
    public function wait(){
        //显示视图模板
        return view('Admin.orders.wait');
    }

    //确认收货
    public function confirm(){
        //显示视图模板
        return view('Admin.orders.confirm');
    }

    //退货退款
    public function refund(){
        //显示视图模板
        return view('Admin.orders.refund');
    }

    //回收站
    public function recycle(){
        //显示视图模板
        return view('Admin.orders.recycle');
    }
	//修改订单
	public function alter(){
		//修改页面
		return view('Admin.orders.alter');
	}
	//删除订单
	public function delete($oid){
		//删除商品
		$result=DB::table('order')->where('id','=',$oid)->delete();
		
		//返回字符串
		if($result){
			return '1';
		}else{
			return '0';
		}	
	}
}
