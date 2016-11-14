<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
use DB;
class AccessoriesController extends Controller
{
    /**
     * 喜欢的商品
     *
     * @like \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
		$id = $request->session()->get('id');
		//查出商品id
		$goodsaccessory=DB::table('goodsaccessory')->where('user_id','=',$id)->lists('good_id');
		
		$goods=DB::table('goods')->where('status','=',1)->whereIn('gid',$goodsaccessory)->get();
		
		return view('Home.like.goods',['goodsaccessory'=>$goodsaccessory,'goods'=>$goods]);
	
    } 	
	
}
