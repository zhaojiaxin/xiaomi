<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Hash;
use DB;
class RetrieveControllerer extends Controller
{
    /**
     * 找回密码
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        //
		return view('Home.retrieve.account');
    }

    //找回密码显示页面2
    public function huser(Request $request){
        //接收表单数据
        $user = $request->only('email');
 
        //查询数据库进行匹配
        $userInfo = DB::table('users')->where('email','=',$user['email'])->first();
		
		//dd($userInfo);
		
		if(empty($userInfo->email)){
		 return view('Home.retrieve.account');
		}
        //匹配操作
        if($user['email'] == $userInfo->email){
				
			$id=($userInfo->id);
			
			$issue=DB::table('issue')->where('user_id','=',$id)->first();
			
			if(empty($issue->name)){
			return view('Home.retrieve.account');
			}else{

            return view('Home.retrieve.issue',['issue'=>$issue]);
			
			}
       } else{
            return view('Home.retrievse.account');
        }
    }

	 //找回密码显示页面3
    public function husers(Request $request){
        //接收表单数据
        $user = $request->only('names','birthdays','grades','user_id');
		//dd($userInfo);
        //查询数据库进行匹配
       $issue = DB::table('issue')->where('user_id','=',$user['user_id'])->first();
		
        //匹配操作
        if($user['names'] == $issue->names && $user['birthdays'] == $issue->birthdays && $user['grades'] == $issue->grades){
		
            return view('Home.retrieve.reset',['issue'=>$issue]);
        }else{
            return view('Home.retrieve.issue',['issue'=>$issue]);
        }
    }
	//找回密码显示页面4
    public function huserd(Request $request){
        //接收表单数据
        $user = $request->only('password','pwd','id');
		
		$issue = DB::table('issue')->where('user_id','=',$user['id'])->first();
		
		if(($user['pwd'] !==$user['password']) || empty($user['pwd'])){
			
			return view('Home.retrieve.reset',['issue'=>$issue]);
		}
		
		$oldpwd=Hash::make($user['password']);
        //查询数据库进行匹配
       $users = DB::table('users')->where('id','=',$user['id'])->update(['password' => $oldpwd]);
		
        //匹配操作
        if($users){	
			$userd = DB::table('users')->where('id','=',$user['id'])->first();
            return view('Home.retrieve.succeed',['users'=>$userd]);
        }else{
            return view('Home.retrieve.issue',['issue'=>$issue]);
        }
    }
}
