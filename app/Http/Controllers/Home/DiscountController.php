<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
use DB;
class DiscountController extends Controller
{
    /**
     * 优惠券 a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     //查询所有优惠券
	$discount=DB::table('discount')->where('dis_state','=',1)->get();		
	//显示视图模板
	return view('Home.discount.index',['discount'=>$discount]);
	
    } 	
	
	public function add($dis_id,$user_id)	
	{
		$discount=DB::table('discount')->where('dis_id','=',$dis_id)->first();
		
		$dis_day=($discount->dis_day);
		//dd($dis_day);
		
		$time = time();
		
        $dis_remove_time = strtotime( "+" . $dis_day . " day");
		
		$results=DB::table('discount_user')->where('dis_id','=',$dis_id)->where('user_id','=',$user_id)->first();
		
		
		if(empty($results->dis_id)||empty($results->user_id)){
		
			$result=DB::table('discount_user')->insert(['dis_id'=>$dis_id,'user_id'=>$user_id,'dis_addtime'=>$time,'dis_remove_time'=>$dis_remove_time]);
			if($result){
				return '1';
			}else{
				return '0';
			}
		}else{
			
			return '0';
		}
		
	}
	
	 /**
     * 未使用优惠券 a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coupon(Request $request)
    {
		
	$id = $request->session()->get('id');
	
	
	$discount_usera=DB::table('discount_user')->where('user_id','=',$id)->lists('dis_id');
	if(empty($discount_usera)){
		
		
	}else{
		$discount_users=DB::table('discount_user')->where('user_id','=',$id)->whereIn('dis_id',$discount_usera)->first();
		
		$dis_remove_time=($discount_users->dis_remove_time);
		
		$dis_id=($discount_users->dis_id);
		
		$time=time();
		
		if($time>=$dis_remove_time){	
		
			$discounts=DB::table('discount')->where('dis_id','=',$dis_id)->update(['dis_state'=>0]);	
		}
	}
						
		$result=DB::table('discount')
			->join('discount_user','discount_user.dis_id','=','discount.dis_id')
			->where('discount.dis_state','=',1)
			->where('discount_user.user_id','=',$id)
			->get();

		//显示视图模板
		return view('Home.discount.coupon',['result'=>$result]);
		
	
    }
	
	 /**
     * 已使用优惠券 a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lose(Request $request)
    {
	$id = $request->session()->get('id');
	
	$discount_user=DB::table('discount_user')->where('user_id','=',$id)->lists('dis_id');
	
	$discount=DB::table('discount')->where('dis_state','=',0)->whereIn('dis_id',$discount_user)->get();
	

	//显示视图模板
	return view('Home.discount.lose',['discount'=>$discount]);
	
    } 

}
