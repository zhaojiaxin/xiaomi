<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ReplyController extends Controller
{
    /**
     * 回复模块
     *
     * @return \Illuminate\Http\Response
     */
    public function reply($gid)
    {

	$gd=DB::table('goods')->where('gid','=',$gid)->first();

	$result=DB::table('goods')
		->join('comment','comment.gid','=','goods.gid')
		->join('users','comment.user_id','=','users.id')
		->where('goods.gid','=',$gid)
		->select('goods.*','comment.content','comment.comment_id','comment.photodd','comment.time','users.*')
		->get();

	$res=DB::table('goods')
		->join('comment','comment.gid','=','goods.gid')
		->join('reply','reply.comment_id','=','comment.comment_id')
		->join('users','reply.user_id','=','users.id')
		->where('goods.gid','=',$gid)
		->select('goods.*','reply.content','reply.time','users.*')
		->get();

		return view('Home.revert.reply',['result'=>$result,'res'=>$res,'gd'=>$gd]);
    }

     /**
     * 回复模块
     *
     * @return \Illuminate\Http\Response
     */
    public function discuss(Request $request)
    {

		//接收表单数据
		$commens=$request->only(['content','comment_id','user_id']);
		$commen=$request->only(['gid']);

		if(empty($commens['content'])){
		//跳转到添加页面
			return redirect('/revert/reply/'.$commen["gid"]);
			exit;
		}

		$time = time();

		$commens['time'] = $time;

		$reply=DB::table('reply')->insert($commens);

		if($reply){//更新成功

				return redirect('/revert/reply/'.$commen["gid"]);
		}else{
				return redirect('/revert/reply/'.$commen["gid"]);
		}


    }
}
