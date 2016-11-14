<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CollectController extends Controller
{
    //显示收藏列表
    public function index(){
        $collects = DB::table('goodsAccessory')
                    ->join('users','goodsAccessory.user_id','=','users.id')
                    ->join('goods','goodsAccessory.good_id','=','goods.gid')
                     ->Paginate(5);
        //dd($collects);
        return view('Admin.collects.list',['collects'=>$collects]);
    }


    public function delete($id){

        $result = DB::table('goodsAccessory')->where('aid',$id)->delete();

        if($result){
            return '1';
        }else{
            return '0';
        }
    }



}
