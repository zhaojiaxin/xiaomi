<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use session;
use DB;
class SpaceController extends Controller
{
    /**
     * 个人中心
     *
     * @return \Illuminate\Http\Response
     */
    public function spac(Request $request)
    {
        //查询用户
		$id = $request->session()->get('id');

		$user=DB::table('users')->where('id','=',$id)->first();
		
		//成功
		$userIn=DB::table('userdetail')->where('user_id','=',$id)->first();
		
		if(empty($userIn)){	
		
			$id = $request->session()->get('id');
			
			$result=DB::table('userdetail')->insert(['user_id'=>$id]);
		}
		//成功
		
		$goodsAccessory=DB::table('goodsAccessory')->where('user_id','=',$id)->lists('good_id');
		
		$goods=DB::table('goods')->where('status','=',1)->whereIn('gid',$goodsAccessory)->count();
		
		$comment=DB::table('comment')->where('user_id','=',$id)->count();
		
		$order=DB::table('order')->where('user_id','=',$id)->where('order_status','=',1)->count();
		
		$orders=DB::table('order')->where('user_id','=',$id)->where('order_status','=',0)->count();
		
		
		
		return view('Home.oneself.centre',['user'=>$user,'goods'=>$goods,'comment'=>$comment,'order'=>$order,'orders'=>$orders]);
    }
	/**
     * 账号安全
     *
     * @safety \Illuminate\Http\Response
     */
	 public function safety(Request $request) 
    {
		$id = $request->session()->get('id');
		
	   $userdetail=DB::table('userdetail')->where('user_id','=',$id)->first();
	   
	   $user=DB::table('users')->where('id','=',$id)->first();

		return view('Home.oneself.safety',['userdetail'=>$userdetail],['user'=>$user]);
    }
	/**
     * 修改账号密码
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		$id=$request->session()->get('id');
		//接收表单数据
		$users=$request->only(['pwd','passwd']);

		$pwd=$request->only(['password']);

		if(empty($pwd['password'])){

			return redirect('/oneself/safety/');

		}

		if(($users['pwd'] !==$users['passwd']) || empty($users['pwd'])){

			return redirect('/oneself/safety/');
		}

		$oldpwd=Hash::make($users['pwd']);

		$result=DB::table('users')->where('id','=',$id)->update(['password' => $oldpwd]);

		if($result){//更新成功
			return redirect('/oneself/win/');
		}else{
			return redirect('/oneself/safety/');
		}

    }
	/**
     * 添加手机号
     *
     * @safety \Illuminate\Http\Response
     */
	 public function mobile(Request $request)
    {
		//接收表单数据
		$userdetail=$request->only(['phone']);

		$id=$request->session()->get('id');

		if(empty($userdetail['phone'])){
		//跳转到添加页面
			return redirect('/oneself/safety/');
			exit;
		}
		$result=DB::table('userdetail')->where('user_id','=',$id)->update($userdetail);
		if($result){//更新成功
				$result=DB::table('users')->where('id','=',$id)->update(['safe'=>1]);
				return redirect('/oneself/win');
		}else{
				return redirect('/oneself/safety/');
		}
    }
	/**
     * 添加密保问题
     *
     * @safety \Illuminate\Http\Response
     */
	 public function ask(Request $request)
    {
		$id=$request->session()->get('id');
		//接收表单数据
		$issue=$request->only(['name','birthday','grade','names','birthdays','grades','user_id']);

		if(empty($issue['names'])||empty($issue['birthdays'])||empty($issue['grades'])){
		//跳转到添加页面
			return redirect('/oneself/safety/');
			exit;
		}
		if(empty($issue['name'])||empty($issue['birthday'])||empty($issue['grade'])){
		//跳转到添加页面
			return redirect('/oneself/safety/');
			exit;
		}
		if($issue['name']==$issue['birthday']){

			return redirect('/oneself/safety/');
		}

		if($issue['birthday']==$issue['grade']){

			return redirect('/oneself/safety/');
		}
		$result2=DB::table('issue')->where('user_id','=',$issue['user_id'])->first();

		if(empty($result2->names)){

			$result=DB::table('issue')->where('user_id','=',$issue['user_id'])->insert($issue);

			if($result){//更新成功
				$result=DB::table('users')->where('id','=',$id)->update(['safe'=>1]);
					return redirect('/oneself/win');
			}else{
					return redirect('/oneself/safety/');
			}
		}else{
					
			$result=DB::table('issue')->where('user_id','=',$issue['user_id'])->update($issue);
			
			$result=DB::table('users')->where('id','=',$id)->update(['safe'=>1]);
			return redirect('oneself/win');

		}
    }
	/**
     * 修改成功
     *
     * @return \Illuminate\Http\Response
     */
    public function win(Request $request)
    {

		return view('Home.oneself.win');
    }
}
