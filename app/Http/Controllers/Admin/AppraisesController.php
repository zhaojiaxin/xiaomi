<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppraisesController extends Controller
{
     //评价列表
    public function index(){
        $result=DB::table('comment')
			   ->join('goods','comment.gid','=','goods.gid')
			   ->select('comment.*','goods.gname')
			   ->Paginate(3);
		//显示视图模板
        return view('Admin.appraises.list',['result'=>$result]);
    }
	
	//删除评论操作
	public function delete($id){
       //dd($id);
		$result=DB::table('comment')->where('comment_id','=',$id)->delete();
		$result1=DB::table('comment')->where('comment_id','=',$id)->delete();
		
		if($result){
			return '1';
		}else{
			return '0';
		}
    }
    //评价回复
    public function reply(){
	
	$result=DB::table('reply')
				->join('comment','comment.comment_id','=','reply.comment_id')
			   ->join('goods','comment.gid','=','goods.gid')
			   ->select('reply.*','goods.gname')
			   ->Paginate(3);
		
        //显示视图模板
        return view('Admin.appraises.reply',['result'=>$result]);
    }
	
	//删除回复操作
	public function Rdelete($id){

		$result=DB::table('reply')->where('id','=',$id)->delete();
		
		if($result){
			return '1';
		}else{
			return '0';
		}
	}
	
}
