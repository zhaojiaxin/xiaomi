<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $ppts = DB::table('ppt')->get();
        //dd($ppts);
        //获取登录用户信息

        //dd($request);

    /*    //查询所有类别
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
*/
    //dd($results,$user);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        //return view('Admin.goods.list',['goods'=>$goods]);
		return view('Home.home.index',['ppts'=>$ppts]);
    }

    //显示商品列表
    public function goodslist()
    {
        //查询所有类别
        $types = DB::table('goodstype')->select('tid','tname')->get();

        $count= DB::table('goodstype')->count();

        for($i=0; $i<$count; $i++){

            $results[$types[$i]->tname] = DB::table('goods')
                                            ->join('goodstype','goods.type_id','=','goodstype.tid')
                                            ->where('goods.type_id',$types[$i]->tid)->get();
            $topnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_topnav');
            $leftnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_leftnav');

        }
        //dd($results);
        return view('Home.goods.goodlist');
    }


}
