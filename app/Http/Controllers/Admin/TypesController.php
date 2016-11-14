<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class TypesController extends Controller
{
    //分类列表
    public function index(){
       $types =  DB::table('goodstype')
                ->select(DB::raw('tid,tname,level,concat(path,"-",tid) as abspath'))
                ->orderBy('abspath')
                ->paginate(2);

        //显示视图模板
       //dd($types);
        return view('Admin.types.list',['types'=>$types]);


    }

    //添加分类
    public function add(){

        //获取所有的商品分类
        $types=DB::table('goodstype')
                ->select(DB::raw('tid,tname,level,concat(path,"-",tid) as abspath'))
                ->orderBy('abspath')
                ->get();

        // dd($types);
        //显示视图模板
        return view('Admin.types.add',['types'=>$types]);
    }

    //添加分类操作
    public function insert(Request $request){
        // dd($request);
       //接收表单数据
        $typesInfo = $request->only(['tname','type','is_topnav','is_leftnav']);
        // dd($typesInfo);
        $level=substr_count($typesInfo['type'],'|');
         // dd($level);
        $name=substr(strrchr($typesInfo['type'],"-"),1);
        // dd($name);
        $fpath=DB::table('goodstype')->where('tname','=',$name)->value('path');
        // dd($fpath);
        $pid=DB::table('goodstype')->where('tname','=',$name)->value('tid');
        // dd($pid);

        if(empty($typesInfo['type']) || $typesInfo['type'] == '请选择...'){
            //echo '############';
            return redirect('/types/add');

        }else if($typesInfo['type'] == '一级分类'){

            $result=DB::table('goodstype')->insert(['tname'=>$typesInfo['tname'],'pid'=>0,'path'=>0,'level'=>1]);
            return redirect('/types/list');

        }else{

            $result=DB::table('goodstype')->insert(['tname'=>$typesInfo['tname'],'pid'=>$pid,'path'=>$fpath.'-'.$pid,'level'=>$level+1]);

            return redirect('/types/list');

        }

    }

    //修改分类界面
    public function modify($id){

        $types=DB::table('goodstype')
                ->where('tid',$id)
                ->get();

        //显示视图模板
        return view('Admin.types.modify',['types'=>$types]);
    }



	//修改操作
    public function update(Request $request){
    	//dd($request);
    	$need = array('tid','tname','is_topnav','is_leftnav');
    	//接收数据
    	$typesInfo = $request->only($need);

    	//更新数据
    	$result = DB::table('goodstype')->where('tid',$typesInfo['tid'])->update($typesInfo);
        //判断是否更新成功
        if($result){
        	// return 'chenggong';
        	return redirect('/types/list/');
        }else{
        	// return 'shibai';
			return redirect('/types/modify/'.$typesInfo['tid']);
        }
    }


    //删除分类操作
    public function delete($id){

        //删除分类
        $result = DB::table('goodstype')->where('tid',$id)->delete();

        if($result){
            return '1';
        }else{
            return '0';
        }
    }
}
