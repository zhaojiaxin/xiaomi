<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BaseController extends Controller
{
 public function index(Request $request)
    {
        //获取登录用户信息

        $types = DB::table('goodstype')->select('tid','tname','is_topnav','is_leftnav')->get();
        // dd($types);
        // $topnav = $types['is_topnav'];
        // $leftnav = $types['is_leftnav'];
         // dd($types);

        $count= DB::table('goodstype')->count();

        for($i=0; $i<$count; $i++){
            $results[$types[$i]->tname] = DB::table('goods')->where('type_id',$types[$i]->tid)->get();
            $topnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_topnav');
            $leftnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_leftnav');
        }

    //dd($results);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        //return view('Admin.goods.list',['goods'=>$goods]);

        $res = DB::table('friendlink')->get();
  //显示网站配置
		$web=DB::table('web')->get();
        //dd($web);
		return view('Home.base',['web'=>$web,'res'=>$res]);
    }
	}


