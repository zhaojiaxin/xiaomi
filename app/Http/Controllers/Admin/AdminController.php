<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    //商城用户列表
    public function index(){
		//查询所有用户
		$admin=DB::table('users')->where('auth','>','0')->get();
        //显示视图
		
		//dd($admin);
        return view('Admin.admins.list',['admin'=>$admin]);
		
		
    }
	//商城用户操作
	
	 //添加用户
    public function add(){
        //显示视图模板
		//return 1;
        return view('Admin.admins.add');
    }
	
	public function add1(Request $request){
		$need=array('email','password','name','photo','created_at');
		$addInfo=$request->only($need);
		$created_at=date('Y-m-d H-i-s');
		$password = $request->input('password');
		$addInfo['auth']=1;
		//dd($addInfo);
		$pwd=$request->only('pwd');
		$imgs = $request->file('photo');
		$addInfo['password'] = Hash::make($password);
		$addInfo['created_at'] =$created_at;
		//dd($addInfo);
		  $dir="uploads/";
        // $arr = explode('.',$imgs);
        // $extension = array_pop($arr);
        //$imgName=$imgs->getClientOriginalName();
        $extension=$imgs->getClientOriginalExtension();
        //dd($extension);
        $newImagesName=md5(time()).".".$extension; 
        
        
        if($imgs){//成功
        
            $request->file('photo')->move($dir,$newImagesName); //使用move 方法移动文件.
            $addInfo['photo']=$dir.$newImagesName;
        
        }else{//失败
            return redirect('/admins/add');
        }
    
        //插入到数据库中
        $result=DB::table('users')->insert($addInfo);
        
        //dd($request->File('logo'));
        //判断是否插入成功
        if($result){//成功
			//echo '111111111111';
            return redirect('/admins/list');
        }else{//失败
            //return redirect('/lunboFormAdd');
			echo '/admins/add';
        }
	
	
	}
	

    
	
	
	//修改页面
	public function modi($id){
		//根据用户id查询用户详情
		$userInfo=DB::table('users')->where('id','=',$id)->first();
		//dd($userInfo);
		//将查询的用户信息分配到模板显示
		return view('Admin.admins.modi',['userInfo'=>$userInfo]);
	}
	
	//修改操作
	public function update(Request $request){
		//dd($request);
		//接收表单数据
		$pwd=$request->Input();	
		//dd($pwd['password']);
		$newUsersInfo=$request->only('id','name','password','email','photo');
		//dd($newUsersInfo);
		$dir='uploads/';
		$img=$newUsersInfo['photo'];
		
		 if($img){//成功
			$img=$img->getClientOriginalName();
			$imgs=$dir.time().$img;
			
			//dd($imgs);
            $request->file('photo')->move($dir,$imgs); //使用move 方法移动文件.
            $newUsersInfo['photo']=$imgs;
        
        }else{//失败
            $photo=$request->only('poto')['poto'];
			$newUsersInfo['photo']=$photo;
        };
		//判断密码是否一致
		if($pwd['pwd']==$newUsersInfo['password']){
			//更新数据
			$newUsersInfo['password']=Hash::make(($pwd['password']));
			$result=DB::table('users')->where('id','=',$newUsersInfo['id'])->update($newUsersInfo);
			
			if($result){//更新成功
				return redirect('/admins/list/');
			}else{
				return redirect('/admins/modi/'.$newUsersInfo["id"]);
			}
		}else{
				return redirect('/admins/modi/'.$newUsersInfo["id"]);
		}
	}
	//删除用户操作
	public function delete($id){
		//删除用户
		$result=DB::table('users')->where('id','=',$id)->delete();

		
		//返回字符串
		if($result){
			echo'1';
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

    //用户详细信息页面
    public function detail($id){
		//查询所有用户
		$userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
		$admin=DB::table('users')->where('id','=',$id)->first();
		//dd($result);
        //显示视图模板
        return view('Admin.admins.specifics',['userdetail'=>$userdetail],['admins'=>$admin]);
    }
	 //用户详细信息修改页面
    public function deta($id){
		//查询所有用户
		$userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
		$admin=DB::table('users')->where('id','=',$id)->first();
		//dd($result);
        //显示视图模板
        return view('Admin.admins.particular',['userdetail'=>$userdetail],['admin'=>admin]);
    }

	public function insert(Request $request){
		//接收表单数据
		//dd($request->all());
		$addInfo=$request->only('name','password','email','photo');
		$file = $request->file('photo');
		$picname = $file->getClientOriginalName();
		
		$dir='uploads/';
			$fname=uniqid(rand()).$picname;
		//接收上传文件
		if($request->hasFile('photo')){
			
			//移动文件
			$request->file('photo')->move($dir,$fname);
			//设置文件路径
			$addInfo['photo']=$dir.$fname;
			}else{
			//上传失败跳转到添加页面
			return view('admins.add');
		}
		$result=DB::table('users')->insert($addInfo);
		//插入数据库中
		//判断是否插入成功
		if($result){
			//成功,跳转到显示列表
			return redirect('admins/list');
		}else{
			//失败,跳转到添加页面
			return redirect('admins/add');
		}
	}
}
