<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{

    public function buygoods(Request $request,$id)
    {
    	//获取所选商品
    	 //$goods = DB::table('goods')->where('gid',$id)->get();
    	  //ldd($goods);
    	 //dd($goods);
         //获取登录用户信息
      /*   $user=$request->user();

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
        $signal = DB::table('goods')->where('gid',$id)->first();
        //dd($signal);
    	 $attrs = DB::table('goodsAttr')
    	 			->join('goodsColor','goodsAttr.color_id','=','goodsColor.id')
    	 			->join('goodsVersion','goodsAttr.version_id','=','goodsVersion.id')
    	 			->join('goods','goodsAttr.good_id','=','goods.gid')
    	 			->where('goodsAttr.good_id','=',$id)
    	 			->get();
        /*$signal = DB::table('goodsAttr')
                    ->join('goodsColor','goodsAttr.color_id','=','goodsColor.id')
                    ->join('goodsVersion','goodsAttr.version_id','=','goodsVersion.id')
                    ->join('goods','goodsAttr.good_id','=','goods.gid')
                    ->where('goodsAttr.good_id','=',$id)
                    ->first();
        //dd($signal);*/
    	//dd($attrs);
        return view('Home.goods.buygoods',['attrs'=>$attrs,'signal'=>$signal]);


        //dd($results);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        //return view('Admin.goods.list',['goods'=>$goods]);


    // return view('Home.base',['results'=>$results,'leftnav'=>$leftnav,'topnav'=>$topnav,'user'=>$user]);

    }

	//喜欢取消喜欢
    public function changes($id,$user_id){

        $status = DB::table('goods')->where('gid',$id)->value('status');


        $status =  $status ? 0 : 1;

        $result = DB::table('goods')->where('gid',$id)->update(['status'=>$status]);

		$results=DB::table('goods')->where('gid',$id)->first();

		if($results->status==1){
			 DB::table('goodsaccessory')->insert(['good_id'=>$id,'user_id'=>$user_id]);

		}else{
			 DB::table('goodsaccessory')->where('good_id','=',$id)->where('user_id','=',$user_id)->delete();

		}

        if($result){
            return '1';
        }else{
            return '0';
        }

    }


    //商品页面加入购物车
    public function getGoods($gid,$vid,$cid){

        //从数据库中获取选定商品属性的商品
       $attrs = DB::table('goodsAttr')
                    ->join('goodsColor','goodsAttr.color_id','=','goodsColor.id')
                    ->join('goodsVersion','goodsAttr.version_id','=','goodsVersion.id')
                    ->join('goods','goodsAttr.good_id','=','goods.gid')
                    ->where('goodsAttr.good_id','=',$gid)
                    ->where('goodsAttr.version_id','=',$vid)
                    ->where('goodsAttr.color_id','=',$cid)
                    ->get();

        if($attrs){
            return json_encode($attrs);
        }else{
            return '0';
        }

    }
    //显示商品搜索页面
    public function searchlist($keyword){


        // $keyword = $request->input('keyword');
        // $type = $request->input('keyword');
        // dd($request);

        if($keyword !== null){
            $attrs = DB::table('goods')
                    ->where('gname','like','%'.$keyword.'%')->Paginate(2);
        }else{
            $attrs = DB::table('goods')->Paginate(1);
        }

//dd($attrs);
        //dd($attrs);
        // $attrs = DB::table('goods')->Paginate(1);
        $types = DB::table('goodstype')->get();


        //dd($types);
        return view('Home.goods.searchlist',['attrs'=>$attrs,'types'=>$types]);
    }

    public function searchgood($keyword){


         // $keyword = $request->input('keyword');
         // return $keyword;
        // $type = $request->input('keyword');
        //dd($request);

        if(isset($keyword)){
            $attrs = DB::table('goods')
                    ->where('gname','like','%'.$keyword.'%')->Paginate(2);

                    if($attrs){
                        return ($attrs);
                    }else{
                        return '0';
                    }

        }else{
            return '3';
        }
}
        //dd($attrs);


//dd($attrs);
        //dd($attrs);
      /*  $types = DB::table('goodstype')->get();


        //dd($types);
        return view('Home.goods.searchlist',['attrs'=>$attrs,'types'=>$types]);*/



    public function typesearch($tid){

         $attrs = DB::table('goods')
                    ->where('type_id',$tid)->Paginate(1);

        $types = DB::table('goodstype')->get();
        return view('Home.goods.searchlist',['attrs'=>$attrs,'types'=>$types]);

    }

   /* //关键字搜索
    public function goodsearch($keyword){
          $attrs = DB::table('goods')
                    ->where('goods.gname','like','%'.$keyword.'%')->get();

            if($attrs){
                //echo '1';
                return json_encode($attrs);
            }else{
                return '0';
            }
    */


}
