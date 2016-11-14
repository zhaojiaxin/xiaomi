<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //商品列表
    public function index(){
    	//查询所有商品
        $goods = DB::table('goods')
                ->join('goodstype','goods.type_id','=','goodstype.tid')
                ->Paginate(3);
        //dd($goods);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        return view('Admin.goods.list',['goods'=>$goods]);
    }

    //添加商品
    public function add(){
        //获取所有商品分类
        $types =  DB::table('goodstype')
                ->select(DB::raw('tid,tname,level,concat(path,"-",tid) as abspath'))
                ->orderBy('abspath')
                ->get();

       //显示视图模板
        return view('Admin.goods.add',['types'=>$types]);
    }

    //添加商品操作
    public function insert(Request $request){

    	//接收表单数据
        //获取商品表信息
        //dd($request);
    	$goodsInfo = $request->only(['gname','type_id','gprice','logo']);

    	//获取上传图片原名
    	$fname = $goodsInfo['logo']-> getClientOriginalName();
    	//dd($fname);
    	//exit;
    	//dd($goodsInfo);
    	//设置图片上传路径
    	$dir = 'uploads/';

    	//接收上传文件
    	if($request->hasFile('logo')){
    		//设置文件路径
    		$goodsInfo['logo'] = $dir.$fname;
    		//移动文件
    		$request->file('logo')->move($dir,$fname);

    	}else{
    		//上传失败跳回商品添加页面
    		return redirect('/goods/add');
    	}

    	//插入到商品表
    	$result = DB::table('goods')->insert($goodsInfo);
       /* //插入到颜色表
        $color_id = DB::table('goodsColor')->insertGetId(['color'=>$attrsInfo['color']]);
        //插入到版本表
        $version_id = DB::table('goodsVersion')->insertGetId(['version'=>$attrsInfo['version']]);
        //将三表的id插入商品属性表
        $result = DB::table('goodsAttr')->insert(['good_id'=>$good_id,'color_id'=>$color_id,'version_id'=>$version_id]);*/


    	//判断是否插入成功
    	if($result){
    		//成功调到商品列表页面
    		return redirect('/goods/list');
    	}else{
    		//失败跳到商品添加页面
    		return redirect('/goods/add');
    	}

    }

    //添加商品属性页面
    public function addAttr($id){
        //根据商品id查询商品详情
        $goodsInfo=DB::table('goods')
                    ->join('goodstype','goods.type_id','=','goodstype.tid')
                    ->where('goods.gid',$id)->first();
        //dd($goodsInfo);
        //将查询的商品信息分配到模板显示
        return view('Admin.goods.addAttr',['goods'=>$goodsInfo]);
    }

    //添加商品属性操作
    public function doAddattr(Request $request){
        // dd($request);
        $goodAttr = $request->only(['good_id','color','version','price','des','stock']);
        //插入到颜色表
        $color_id = DB::table('goodsColor')->insertGetId(['color'=>$goodAttr['color']]);
        //插入到版本表
        $version_id = DB::table('goodsVersion')->insertGetId(['version'=>$goodAttr['version'],'des'=>$goodAttr['des']]);
        //插入到商品属性表
        $result = DB::table('goodsAttr')->insert(['good_id'=>$goodAttr['good_id'],'color_id'=>$color_id,'version_id'=>$version_id,'stock'=>$goodAttr['stock'],'price'=>$goodAttr['price']]);

        //判断是否插入成功
        if($result){
            //成功调到商品详情页面
            return redirect('/goods/detail/'.$goodAttr['good_id']);
            // return '1';
        }else{
            //失败跳到商品添加页面
            return redirect('/goods/addAttr/'.$goodAttr['good_id']);
        }
    }


     //商品详情页面
    public function detail($id){
        //查询所有商品
        $goods = DB::table('goodsAttr')
                ->join('goods','goodsAttr.good_id','=','goods.gid')
                ->join('goodsColor','goodsAttr.color_id','=','goodsColor.id')
                ->join('goodsVersion','goodsAttr.version_id','=','goodsVersion.id')
                ->where('goodsAttr.good_id',$id)
                ->Paginate(5);

       // dd($goods);
        //显示视图模板(通过键值对的方式分配参数到模板视图)
        return view('Admin.goods.detail',['goods'=>$goods]);
    }



	//修改页面
	public function modify($id){
		//根据商品id查询商品详情
		$goodsInfo=DB::table('goods')
                    ->join('goodstype','goods.type_id','=','goodstype.tid')
                    ->where('goods.gid',$id)->first();
		//dd($goodsInfo);
		//将查询的商品信息分配到模板显示
		return view('Admin.goods.modify',['goods'=>$goodsInfo]);
	}

    //修改操作
    public function update(Request $request){
    	//dd($request);
    	$need = array('gid','gname','type_id','gprice','logo');
    	//如果修改了logo则替换logo,否则使用原来logo
    	if($request->hasFile('logo')){
    		$need[] = 'logo';
    	}
    	//接收数据
    	$goodsInfo = $request->only($need);

        $fname = $goodsInfo['logo']-> getClientOriginalName();
        $dir = 'uploads/';
        $goodsInfo['logo'] = $dir.$fname;
         //移动文件
        $request->file('logo')->move($dir,$fname);
    	//dd($goodsInfo);
    	//更新数据
    	$result = DB::table('goods')->where('gid',$goodsInfo['gid'])->update($goodsInfo);
        //判断是否更新成功
        if($result){
        	// return 'chenggong';
        	return redirect('/goods/list/');
        }else{
        	// return 'shibai';
			return redirect('/goods/modify/'.$goodsInfo['gid']);
        }

    }

    //删除商品操作
    public function delete($id){
       // dd($id);
        //删除商品
        $result = DB::table('goods')

        ->where('gid',$id)->delete();

        if($result){
        	return '1';
        }else{
        	return '0';
        }
    }

    //删除商品详情
    public function Attrdelete($id){
       // dd($id);
        //删除商品

        $result = DB::table('goodsAttr')
                ->join('goods','goodsAttr.good_id','=','goods.gid')
                ->join('goodsColor','goodsAttr.color_id','=','goodsColor.id')
                ->join('goodsVersion','goodsAttr.version_id','=','goodsVersion.id')
                ->where('goodsAttr.good_id',$id)
                ->Paginate(5);

        if($result){
            return '1';
        }else{
            return '0';
        }
    }

    //改变商品状态操作
    public function changeState($id){

        $state = DB::table('goods')->where('gid',$id)->value('state');

        $state =  $state ? 0 : 1;

        $result = DB::table('goods')->where('gid',$id)->update(['state'=>$state]);

        if($result){

            return '1';
        }else{
            return '0';
        }

    }

     //改变商品收藏状态操作
    public function changeCollectState($id){

        $status = DB::table('goods')->where('gid',$id)->value('status');


        $status =  $status ? 0 : 1;

        $result = DB::table('goods')->where('gid',$id)->update(['status'=>$status]);

        if($result){
            return '1';
        }else{
            return '0';
        }

    }



}
