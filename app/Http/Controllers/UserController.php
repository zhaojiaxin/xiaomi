<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    //处理注册成功跳转而来的操作
	public function __construct(){
        $this->middleware('auth');
    }

    public function profile(Request $request)
    {



    $user = $request->user();
    $id = $user->id;
    $name = $user->name;
    $email = $user->email;

    // $result = DB::table('userDetail')->insert('user_id',$id);



    /* $types = DB::table('goodstype')->select('tid','tname','is_topnav','is_leftnav')->get();
        // dd($types);
        // $topnav = $types['is_topnav'];
        // $leftnav = $types['is_leftnav'];
         // dd($types);

        $count= DB::table('goodstype')->count();

        for($i=0; $i<$count; $i++){
            $results[$types[$i]->tname] = DB::table('goods')->where('type_id',$types[$i]->tid)->get();
            $topnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_topnav');
            $leftnav[$types[$i]->tname] = DB::table('goodstype')->where('tid',$types[$i]->tid)->value('is_leftnav');
        }*/
        //dd($results);
        $request->session()->put('id', $id);
        $request->session()->put('name', $name);
        $request->session()->put('email', $email);
		// $user=$request->user();

        //重定向到home
		return redirect('/home');

    }


}
