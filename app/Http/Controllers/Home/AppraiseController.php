<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
use DB;
class AppraiseController extends Controller
{
    /**
     * 商品评价
     * 未评价商品
     * @appraise \Illuminate\Http\Response
     */
    public function appraise(Request $request)
    {
        //
		$id = $request->session()->get('id');

		$result=DB::table('order')
			->join('goods','goods.gid','=','order.good_id')
			->where('order.user_id','=',$id)
			->where('order.order_status','=',1)
			->get();
		//dd($result);
		return view('Home.evaluate.appraise',['result'=>$result]);
    }
    /**
     * 商品评价
     * 评价商品
     * @appraise \Illuminate\Http\Response
     */
    public function review($gid)
    {
        //

		$goods=DB::table('goods')->where('gid','=',$gid)->first();

		return view('Home.evaluate.review',['goods'=>$goods]);
    }
	 /**
     * 商品评价
     * 添加评论
     * @appraise \Illuminate\Http\Response
     */
    public function affixion(Request $request)
    {
		$comment=$request->only('content','user_id','gid','photodd');

		if(empty($comment['photodd'])){

			$comment['photodd']='';
		}
		if($request->hasFile('photodd')){
			$fname = $comment['photodd']-> getClientOriginalName();
			$dir='uploads/';
			//设置文件路径
			$comment['photodd']=$dir.$fname;
			//移动文件
			$request->file('photodd')->move($dir,$fname);

		}

		$time = time();
		$comment['time'] = $time;

		if(empty($comment['content'])){
		//跳转到添加页面
			return redirect('/evaluate/review/'.$comment['gid']);
			exit;
		}
		$result=DB::table('comment')->where('user_id','=',$comment['user_id'])->where('gid','=',$comment['gid'])->first();
		if(empty($result)){

			$results=DB::table('comment')->insert($comment);

			return redirect('/revert/reply/'.$comment['gid']);
		}else{
			return redirect('/evaluate/review/'.$comment['gid']);

		}
	}
}
