<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class addOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	
	public function addOrder($uid)
    {
		
		
		
		//查询购物车信息
		// $cart=DB::table('cart')->where('user_id',$uid)->get();
		//dd($cart);
		$result=DB::table('cart')
					->join('goods','goods.gid','=','cart.good_id')
					->where('cart.user_id','=',$uid)
					->select()
					->get();
		$psum=0;
		$gsum=0;
		foreach($result as $key=>$value){
			$gsum+=$value->good_num;
			$psum+=($value->good_num)*($value->gprice);
		}		
		$result1=['psum'=>$psum,'gsum'=>$gsum];	
		//dd($result);
		//查询所有收货地址
		$address=DB::table('useraddress')->where('user_id',$uid)->get();
		
        $types = DB::table('goodstype')->select('tid','tname','is_topnav','is_leftnav')->get();
		
		$discount=DB::table('discount')
				->join('discount_user','discount_user.dis_id','=','discount.dis_id')
				->where('discount_user.user_id','=',$uid)
				->where('discount.dis_state','=',1)
				->get();

		return view('Home.myorder.addorder',['address'=>$address,'result'=>$result,'result1'=>$result1,'discount'=>$discount]);
		
		
	}
	
	public function sAddorder($uid,$aid)
    {
		$result=DB::table('cart')
					->join('goods','goods.gid','=','cart.good_id')
					->where('cart.user_id','=',$uid)
					->get();
		//dd($result);
		$delete=DB::table('cart')->where('user_id','=',$uid)->delete();
		foreach($result as $key=>$value){
			
			$time=time();
			$gid=$value->gid;
			$tprice=($value->good_num)*($value->gprice);
			$status=0;
			$num=$value->good_num;

			$order=array('create_time'=>$time,'user_id'=>$uid,'addr_id'=>$aid,'good_id'=>$gid,'good_num'=>$num,'total_price'=>$tprice,'order_status'=>$status);
			$oRes = DB::table('order')->insert(['create_time'=>$time,'user_id'=>$uid,'addr_id'=>$aid,'good_id'=>$gid,'good_num'=>$num,'total_price'=>$tprice,'order_status'=>$status]);
			
			
		}
		
		return json_encode($result);
    }
	

}
