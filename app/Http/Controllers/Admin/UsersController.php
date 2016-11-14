<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Hash;
use DB;
class UsersController extends Controller
{
    //商城用户列表
    public function index(){
		//查询所有用户
		$users=DB::table('users')->Paginate(3);
        //显示视图模板
        return view('Admin.users.list',['users'=>$users]);
		
		
    }
	//商城用户操作
	
	 //添加用户
    public function add(){
        //显示视图模板
        return view('Admin.users.add');
    }

	//商城用户操作
	public function insert(Request $request){
		//接收表单数据
		$addInfo=$request->only(['email','password','name','auth']);
		
		$pwd=$request->only(['pwd']);
		
		if(empty($addInfo['email'])){
		//跳转到添加页面
			return redirect('/users/add');
			exit;
			
		}
		if(empty($addInfo['name'])){
		//跳转到添加页面
			return redirect('/users/add');
			exit;
		}
		if(empty($addInfo['password'])&&empty($pwd['pwd'])){
		//跳转到添加页面
			return redirect('/users/add');
			exit;
		}
		//判断密码是否一致
		if($pwd['pwd']==$addInfo['password']){
			$addInfo['password']=Hash::make($addInfo['password']);
			//插入数据到数据库
			$result=DB::table('users')->insert($addInfo);
			
			//判断是否插入成功
			if($result){
				//成功
				$userIn=DB::table('users')->where('email','=',$addInfo['email'])->first();
				$id=($userIn->id);
				
				$result=DB::table('userdetail')->insert(['user_id'=>$id]);
				
				return redirect('/users/list');
				
			}else{
				//跳转到添加页面
				return redirect('/users/add');
				
			}
		}else{
				
			//跳转到添加页面
			return redirect('/users/add');
		}
	}
	//修改页面
	public function modi($id){
	
		//根据用户id查询用户详情
		$user=DB::table('users')->where('id','=',$id)->first();
	//	dd($id);
		$userInfo=DB::table('userdetail')->where('user_id','=',$id)->first();
		//dd($userInfo);
		//将查询的用户信息分配到模板显示
		return view('Admin.users.modi',['user'=>$user,'userInfo'=>$userInfo]);
	}
	
	//修改操作
	public function update(Request $request){
		
		//接收表单数据
		$pwd=$request->only(['pwd']);
		$newUsersInfo=$request->only('id','name','password','email');
		//判断密码是否一致
		if($pwd['pwd']==$newUsersInfo['password']){
			//更新数据
			$newUsersInfo['password']=Hash::make($newUsersInfo['password']);
			
			$result=DB::table('users')->where('id','=',$newUsersInfo['id'])->update($newUsersInfo);
			
			if($result){//更新成功
				return redirect('/users/list/');
			}else{
				return redirect('/users/modi/'.$newUsersInfo["id"]);
			}
		}else{
				return redirect('/users/modi/'.$newUsersInfo["id"]);
		}
	}
	//删除用户操作
	public function delete($id){
		//删除用户
		$result=DB::table('users')->where('id','=',$id)->delete();
		//删除用户详信息
		$result2=DB::table('userdetail')->where('user_id','=',$id)->delete();
		//返回字符串
		if($result&$result2){
			return '1';
		}else{
			return '0';
		}	
	}
	
	
    //改变用户状态操作
    public function change($id){

        $state = DB::table('users')->where('id','=',$id)->value('state');

        $state =  $state ? 0 : 1;

        $result = DB::table('users')->where('id','=',$id)->update(['state'=>$state]);
        if($result){
            return '1';
        }else{
            return '0';
        }

    }

    //用户详细信息
    public function detail($id){
		//查询所有用户
		$userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
		
		$users=DB::table('users')->where('id','=',$id)->first();
		//dd($result);
        //显示视图模板
        return view('Admin.users.specifics',['userdetail'=>$userdetail,'users'=>$users]);
    }
	 //用户详细信息操作
    public function deta($id){
		//查询所有用户
		$userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
		$users=DB::table('users')->where('id','=',$id)->first();
		//dd($result);
        //显示视图模板
        return view('Admin.users.particular',['userdetail'=>$userdetail,'users'=>$users]);
    }
	//用户详细信息修改
	public function amend(Request $request){
		
		$goodsInfo=$request->only('user_id','sex','YYYY','MM','DD');
		
		$user=$request->only('name','email','photo');
		
		if(empty($user['photo'])){
			
			$user['photo']='uploads/dd.jpg';
		}
		if($request->hasFile('photo')){
			$fname = $user['photo']-> getClientOriginalName();
			$dir='uploads/';
			//设置文件路径
			$user['photo']=$dir.$fname;
			//移动文件
			$request->file('photo')->move($dir,$fname);
			
		}
		//更新数据
			$result=DB::table('userdetail')->where('user_id','=',$goodsInfo['user_id'])->update($goodsInfo);
			$users=DB::table('users')->where('id','=',$goodsInfo['user_id'])->update($user);
		if($result){//更新成功
			return redirect('/users/list');
		}else{
			return redirect('/users/particular/'.$goodsInfo["user_id"]);
		}
	}
}
