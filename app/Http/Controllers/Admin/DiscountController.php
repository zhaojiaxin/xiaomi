<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DiscountController extends Controller
{
    //优惠劵列表
    public function index(){
		//查询所有优惠劵
		$discount=DB::table('discount')->Paginate(3);
        //显示视图模板
        return view('Admin.discount.list',['discount'=>$discount]);
				
    }

	//优惠劵操作
	
	 //添加优惠劵
    public function add(){
        //显示视图模板
        return view('Admin.discount.add');
    }

	//优惠劵操作
	public function insert(Request $request){
		
		//接收表单数据
		$addInfo=$request->only(['dis_title','dis_picname','dis_rule','dis_state','dis_text','dis_day']);
		
		$dir='uploads/';
		$fname = $addInfo['dis_picname']-> getClientOriginalName();
		//接收上传文件
		if($request->hasFile('dis_picname')){
			//移动文件
			$request->file('dis_picname')->move($dir,$fname);
			//设置文件路径
			$addInfo['dis_picname']=$dir.$fname;
		}else{
			//上传文件失败继续添加页面
			//跳转到商品添加页面
			return redirect('/discount/add');
		}
		
		//插入数据到数据库
		$result=DB::table('discount')->insert($addInfo);
		//判断是否插入成功
		if($result){
			//成功
			return redirect('/discount/list');
			
		}else{
			//跳转到添加页面
			return redirect('/discount/add');
			
		}
		
	}
		//修改页面
	public function modi($dis_id){
		//根据商品id查询商品详情
		$discountInfo=DB::table('discount')->where('dis_id','=',$dis_id)->first();
		//将查询的商品信息分配到模板显示
		return view('Admin.discount.modi',['discountInfo'=>$discountInfo]);
	}

	//修改操作
	public function update(Request $request){
		$addInfo=$request->only(['dis_title','dis_picname','dis_rule','dis_state','dis_text','dis_day']);
		
		$newdiscountInfo=$request->only(['dis_id']);
		
		$discountInfo=DB::table('discount')->where('dis_id','=',$newdiscountInfo['dis_id'])->first();
		
		if(empty($addInfo['dis_picname'])){
			
			return view('Admin.discount.modi',['discountInfo'=>$discountInfo]);
			
		}
		if($request->hasFile('dis_picname')){
			$fname = $addInfo['dis_picname']-> getClientOriginalName();
			$dir='uploads/';
			//设置文件路径
			$addInfo['dis_picname']=$dir.$fname;
			//移动文件
			$request->file('dis_picname')->move($dir,$fname);
		}
		

		//更新数据
		$result=DB::table('discount')->where('dis_id','=',$newdiscountInfo['dis_id'])->update($addInfo);
		
		if($result){//更新成功
			return redirect('/discount/list/');
		}else{
			return redirect('/discount/modi/',['discountInfo'=>$discountInfo]);
		}
	}
	//删除优惠券操作
	public function delete($id){
		//删除优惠券
		$result=DB::table('discount')->where('dis_id','=',$id)->delete();
		//返回字符串
		if($result){
			return '1';
		}else{
			return '0';
		}	
	}
    //改变优惠券状态操作
    public function change($id){

        $state = DB::table('discount')->where('dis_id','=',$id)->value('dis_state');
		
        $dis_state =  $state ? 0 : 1;

        $result = DB::table('discount')->where('dis_id','=',$id)->update(['dis_state'=>$dis_state]);
        if($result){
            return '1';
        }else{
            return '0';
        }

    }
}
