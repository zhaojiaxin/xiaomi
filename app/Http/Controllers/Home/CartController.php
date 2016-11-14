<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class cartController extends Controller
{

    public function index($uid)
    {
	
		
		//购物车查询操作
		$result=DB::table('cart')
					->join('goods','goods.gid','=','cart.good_id')
					->join('goodsattr','goods.gid','=','goodsattr.good_id')
					->join('goodscolor','goodsattr.color_id','=','goodscolor.id')
					->join('goodsversion','goodsattr.version_id','=','goodsversion.id')
					->where('cart.user_id','=',$uid)
					->select('cart.*','goods.*','goodscolor.color','goodsversion.version')
					->get();
		//dd($result);
		$psum=0;
		$gsum=0;
		foreach($result as $key=>$value){
			$gsum+=$value->good_num;
			$psum+=($value->good_num)*($value->gprice);
		}
		$result1=['psum'=>$psum,'gsum'=>$gsum];
		//dd($result1);

		//显示视图模板
		return view('Home.gouwuche.gouwuche',['result'=>$result,'result1'=>$result1]);
    }
	
	//将商品加入到购物车中
	public function add($gid,$uid)
    {
		$arr=['user_id'=>$uid,'good_id'=>$gid];
		$result=DB::table('cart')->insert($arr);
		
		return redirect('/addCart/'.$uid);
	
    }
	public function raiseNum($id,$num){
		$num++;
		if($num==6){
			$result=1;
		}else{
			$result=DB::table('cart')->where('id',$id)->update(['good_num'=>$num]);
		}
		if($result){
			return $num;
		}else{
			return null;
		}
	}
	
	public function reduceNum($id,$num){
		$num--;
		if($num==0){
		
		}else{
			$result=DB::table('cart')->where('id',$id)->update(['good_num'=>$num]);
		}
		
		
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
	
	public function delete($id){
		$result=DB::table('cart')->where('id',$id)->delete();
		//console.log($result);
		
		if($result){
			return 1;
		}else{
			return 0;
		}
	}
}
