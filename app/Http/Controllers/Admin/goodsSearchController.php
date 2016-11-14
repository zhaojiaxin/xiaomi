<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class goodsSearchController extends Controller
{


    //商品搜索
    function goodsSearch($txt){

    	// dd($request);
    	// $name = $request->get('search');
    	//dd($name);
        //通过商品关键词搜索商品列表
        $search = DB::table('goods')
        		->join('goodstype','goods.type_id','=','goodstype.tid')
        		->where('goods.gname','like','%'.$txt.'%')->get();


        if($search){
        	//echo '1';
			return json_encode($search);
        }else{
        	return '0';
        }

// return $txt;
	}

}
